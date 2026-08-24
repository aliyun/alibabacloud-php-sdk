<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableHpnZonesResponseBody\instanceHpnZones;

class ListKVCacheStoreAvailableHpnZonesResponseBody extends Model
{
    /**
     * @var instanceHpnZones[]
     */
    public $instanceHpnZones;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceHpnZones' => 'InstanceHpnZones',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceHpnZones)) {
            Model::validateArray($this->instanceHpnZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceHpnZones) {
            if (\is_array($this->instanceHpnZones)) {
                $res['InstanceHpnZones'] = [];
                $n1 = 0;
                foreach ($this->instanceHpnZones as $item1) {
                    $res['InstanceHpnZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceHpnZones'])) {
            if (!empty($map['InstanceHpnZones'])) {
                $model->instanceHpnZones = [];
                $n1 = 0;
                foreach ($map['InstanceHpnZones'] as $item1) {
                    $model->instanceHpnZones[$n1] = instanceHpnZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
