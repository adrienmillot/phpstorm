#set ( $CAPITALIZED_PARAM_NAME = ${StringUtils.removeAndHump(${PARAM_NAME}, ".")} )
/**
 * @param ${TYPE_HINT} $prm${CAPITALIZED_PARAM_NAME}
 */
public ${STATIC} function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #end$prm${CAPITALIZED_PARAM_NAME})#if (${VOID_RETURN_TYPE}):void #end
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $prm${CAPITALIZED_PARAM_NAME};
#else
    $this->${FIELD_NAME} = $prm${CAPITALIZED_PARAM_NAME};
#end
}
