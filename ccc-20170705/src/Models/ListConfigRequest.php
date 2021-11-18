<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $configItem;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configItem' => 'ConfigItem',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItem) {
            $res['ConfigItem'] = $this->configItem;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ConfigItem'])) {
            if (!empty($map['ConfigItem'])) {
                $model->configItem = $map['ConfigItem'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
