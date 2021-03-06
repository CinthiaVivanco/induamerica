Public Class CategoriaProducto

#Region "Datos"
	Private mcod_categoria AS Integer
	Private mnombre AS String
	Private mestado AS String
#End Region
#Region "Propiedades"
	Public Property cod_categoria() AS Integer
		Get
			return Me.mcod_categoria
		End Get
		Set(ByVal value As Integer)
			Me.mcod_categoria = value
		End Set
	End Property
	Public Property nombre() AS String
		Get
			return Me.mnombre
		End Get
		Set(ByVal value As String)
			Me.mnombre = value
		End Set
	End Property
	Public Property estado() AS String
		Get
			return Me.mestado
		End Get
		Set(ByVal value As String)
			Me.mestado = value
		End Set
    End Property

    Public ReadOnly Property NombreEstado As String

        Get
            Dim x As String = ""

            If Me.estado = "A" Then
                x = "Activo"
            ElseIf Me.estado = "I" Then
                x = "Inactivo"
            End If
            Return x
        End Get
    End Property

#End Region
#Region "Constructores"
	Public Sub New()
	End Sub
    Public Sub New(ByVal wcod_categoria As Integer)
        Me.cod_categoria = wcod_categoria
    End Sub
    Public Sub New(ByVal wcod_categoria As Integer, ByVal wnombre As String, ByVal westado As String)
        Me.cod_categoria = wcod_categoria
        Me.nombre = wnombre
        Me.estado = westado
    End Sub
#End Region

End Class