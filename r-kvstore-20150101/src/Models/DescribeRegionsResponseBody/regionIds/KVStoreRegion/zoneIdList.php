<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds\KVStoreRegion;

use AlibabaCloud\Dara\Model;

class zoneIdList extends Model
{
    /**
     * @var string[]
     */
    public $zoneId;
    protected $_name = [
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->zoneId)) {
            Model::validateArray($this->zoneId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zoneId) {
            if (\is_array($this->zoneId)) {
                $res['ZoneId'] = [];
                $n1 = 0;
                foreach ($this->zoneId as $item1) {
                    $res['ZoneId'][$n1++] = $item1;
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
        if (isset($map['ZoneId'])) {
            if (!empty($map['ZoneId'])) {
                $model->zoneId = [];
                $n1 = 0;
                foreach ($map['ZoneId'] as $item1) {
                    $model->zoneId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
