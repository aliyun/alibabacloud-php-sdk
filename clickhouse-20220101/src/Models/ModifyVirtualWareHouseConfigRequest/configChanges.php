<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseConfigRequest;

use AlibabaCloud\Tea\Model;

class configChanges extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example keep_alive_timeout
     *
     * @var string
     */
    public $configFullPath;

    /**
     * @description This parameter is required.
     *
     * @example 300
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'configFullPath' => 'ConfigFullPath',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFullPath) {
            $res['ConfigFullPath'] = $this->configFullPath;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configChanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigFullPath'])) {
            $model->configFullPath = $map['ConfigFullPath'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
