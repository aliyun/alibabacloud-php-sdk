<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListConfigRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $configItem;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'configItem' => 'ConfigItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->configItem) {
            $res['ConfigItem'] = $this->configItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ConfigItem'])) {
            if (!empty($map['ConfigItem'])) {
                $model->configItem = $map['ConfigItem'];
            }
        }

        return $model;
    }
}
