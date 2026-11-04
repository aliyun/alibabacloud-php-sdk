<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->configItem)) {
            Model::validateArray($this->configItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configItem) {
            if (\is_array($this->configItem)) {
                $res['ConfigItem'] = [];
                $n1 = 0;
                foreach ($this->configItem as $item1) {
                    $res['ConfigItem'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItem'])) {
            if (!empty($map['ConfigItem'])) {
                $model->configItem = [];
                $n1 = 0;
                foreach ($map['ConfigItem'] as $item1) {
                    $model->configItem[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
