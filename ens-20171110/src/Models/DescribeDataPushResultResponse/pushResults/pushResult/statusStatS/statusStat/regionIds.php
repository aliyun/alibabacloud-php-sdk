<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults\pushResult\statusStatS\statusStat;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults\pushResult\statusStatS\statusStat\regionIds\regionId;
use AlibabaCloud\Tea\Model;

class regionIds extends Model
{
    /**
     * @var regionId[]
     */
    public $regionId;
    protected $_name = [
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = [];
            if (null !== $this->regionId && \is_array($this->regionId)) {
                $n = 0;
                foreach ($this->regionId as $item) {
                    $res['RegionId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            if (!empty($map['RegionId'])) {
                $model->regionId = [];
                $n               = 0;
                foreach ($map['RegionId'] as $item) {
                    $model->regionId[$n++] = null !== $item ? regionId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
