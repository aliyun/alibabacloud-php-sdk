<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool\instanceConfigs\instanceConfig;

class instanceConfigs extends Model
{
    /**
     * @var instanceConfig[]
     */
    public $instanceConfig;
    protected $_name = [
        'instanceConfig' => 'InstanceConfig',
    ];

    public function validate()
    {
        if (\is_array($this->instanceConfig)) {
            Model::validateArray($this->instanceConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceConfig) {
            if (\is_array($this->instanceConfig)) {
                $res['InstanceConfig'] = [];
                $n1 = 0;
                foreach ($this->instanceConfig as $item1) {
                    $res['InstanceConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceConfig'])) {
            if (!empty($map['InstanceConfig'])) {
                $model->instanceConfig = [];
                $n1 = 0;
                foreach ($map['InstanceConfig'] as $item1) {
                    $model->instanceConfig[$n1] = instanceConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
