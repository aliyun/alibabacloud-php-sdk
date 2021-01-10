<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\ConfigAIActionRequest;

use AlibabaCloud\Tea\Model;

class dataTypeConfigList extends Model
{
    /**
     * @var string
     */
    public $configs;

    /**
     * @var string
     */
    public $dataType;
    protected $_name = [
        'configs'  => 'Configs',
        'dataType' => 'DataType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataTypeConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        return $model;
    }
}
