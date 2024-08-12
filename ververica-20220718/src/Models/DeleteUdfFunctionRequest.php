<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class DeleteUdfFunctionRequest extends Model
{
    /**
     * @description The name of the class that corresponds to the UDF.
     *
     * This parameter is required.
     * @example Category
     *
     * @var string
     */
    public $className;

    /**
     * @description The name of the resource that corresponds to the UDF that you want to delete.
     *
     * This parameter is required.
     * @example test-udf
     *
     * @var string
     */
    public $udfArtifactName;
    protected $_name = [
        'className'       => 'className',
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
        if (null !== $this->udfArtifactName) {
            $res['udfArtifactName'] = $this->udfArtifactName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUdfFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['udfArtifactName'])) {
            $model->udfArtifactName = $map['udfArtifactName'];
        }

        return $model;
    }
}
