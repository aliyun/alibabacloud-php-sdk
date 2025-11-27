<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCAvailableResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCAvailableResourceResponseBody\availableZones\availableResources;

class availableZones extends Model
{
    /**
     * @var availableResources[]
     */
    public $availableResources;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusCategory;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'statusCategory' => 'StatusCategory',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->availableResources)) {
            Model::validateArray($this->availableResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableResources) {
            if (\is_array($this->availableResources)) {
                $res['AvailableResources'] = [];
                $n1 = 0;
                foreach ($this->availableResources as $item1) {
                    $res['AvailableResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
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
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n1 = 0;
                foreach ($map['AvailableResources'] as $item1) {
                    $model->availableResources[$n1] = availableResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
