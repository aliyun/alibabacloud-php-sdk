<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;

class ListKVCacheStoreAvailableHpnZonesRequest extends Model
{
    /**
     * @var string[]
     */
    public $kvcsIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'kvcsIds' => 'KvcsIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->kvcsIds)) {
            Model::validateArray($this->kvcsIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kvcsIds) {
            if (\is_array($this->kvcsIds)) {
                $res['KvcsIds'] = [];
                $n1 = 0;
                foreach ($this->kvcsIds as $item1) {
                    $res['KvcsIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['KvcsIds'])) {
            if (!empty($map['KvcsIds'])) {
                $model->kvcsIds = [];
                $n1 = 0;
                foreach ($map['KvcsIds'] as $item1) {
                    $model->kvcsIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
