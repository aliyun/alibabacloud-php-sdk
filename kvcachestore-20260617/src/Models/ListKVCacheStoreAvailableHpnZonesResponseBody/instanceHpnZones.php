<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableHpnZonesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableHpnZonesResponseBody\instanceHpnZones\availableHpnZones;

class instanceHpnZones extends Model
{
    /**
     * @var availableHpnZones[]
     */
    public $availableHpnZones;

    /**
     * @var string
     */
    public $kvcsId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableHpnZones' => 'AvailableHpnZones',
        'kvcsId' => 'KvcsId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->availableHpnZones)) {
            Model::validateArray($this->availableHpnZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableHpnZones) {
            if (\is_array($this->availableHpnZones)) {
                $res['AvailableHpnZones'] = [];
                $n1 = 0;
                foreach ($this->availableHpnZones as $item1) {
                    $res['AvailableHpnZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kvcsId) {
            $res['KvcsId'] = $this->kvcsId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AvailableHpnZones'])) {
            if (!empty($map['AvailableHpnZones'])) {
                $model->availableHpnZones = [];
                $n1 = 0;
                foreach ($map['AvailableHpnZones'] as $item1) {
                    $model->availableHpnZones[$n1] = availableHpnZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['KvcsId'])) {
            $model->kvcsId = $map['KvcsId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
