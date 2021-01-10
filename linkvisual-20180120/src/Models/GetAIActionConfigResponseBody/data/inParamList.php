<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class inParamList extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var bool
     */
    public $needConfig;

    /**
     * @var string[]
     */
    public $configItems;
    protected $_name = [
        'dataType'    => 'DataType',
        'needConfig'  => 'NeedConfig',
        'configItems' => 'ConfigItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->needConfig) {
            $res['NeedConfig'] = $this->needConfig;
        }
        if (null !== $this->configItems) {
            $res['ConfigItems'] = $this->configItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['NeedConfig'])) {
            $model->needConfig = $map['NeedConfig'];
        }
        if (isset($map['ConfigItems'])) {
            if (!empty($map['ConfigItems'])) {
                $model->configItems = $map['ConfigItems'];
            }
        }

        return $model;
    }
}
