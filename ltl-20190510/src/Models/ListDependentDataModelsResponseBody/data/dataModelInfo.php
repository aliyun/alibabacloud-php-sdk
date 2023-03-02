<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListDependentDataModelsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataModelInfo extends Model
{
    /**
     * @example KI8D
     *
     * @var string
     */
    public $dataModelCode;

    /**
     * @var string
     */
    public $dataModelName;
    protected $_name = [
        'dataModelCode' => 'DataModelCode',
        'dataModelName' => 'DataModelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataModelCode) {
            $res['DataModelCode'] = $this->dataModelCode;
        }
        if (null !== $this->dataModelName) {
            $res['DataModelName'] = $this->dataModelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataModelCode'])) {
            $model->dataModelCode = $map['DataModelCode'];
        }
        if (isset($map['DataModelName'])) {
            $model->dataModelName = $map['DataModelName'];
        }

        return $model;
    }
}
