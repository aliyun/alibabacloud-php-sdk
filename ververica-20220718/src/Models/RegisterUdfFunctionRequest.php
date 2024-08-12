<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class RegisterUdfFunctionRequest extends Model
{
    /**
     * @description The name of the class that corresponds to the UDF.
     *
     * This parameter is required.
     * @example orderRank
     *
     * @var string
     */
    public $className;

    /**
     * @description The name of the UDF. In most cases, the name of the UDF is the same as the class name. You can specify a name for the UDF.
     *
     * This parameter is required.
     * @example orderRank
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The name of the JAR or Python file that corresponds to the UDF.
     *
     * This parameter is required.
     * @example test-udf
     *
     * @var string
     */
    public $udfArtifactName;
    protected $_name = [
        'className'       => 'className',
        'functionName'    => 'functionName',
        'udfArtifactName' => 'udfArtifactName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->udfArtifactName) {
            $res['udfArtifactName'] = $this->udfArtifactName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterUdfFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['udfArtifactName'])) {
            $model->udfArtifactName = $map['udfArtifactName'];
        }

        return $model;
    }
}
