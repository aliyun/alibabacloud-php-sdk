<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class DescribeSnLabelCountsRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelList;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'labelList' => 'LabelList',
        'tenantId' => 'TenantId',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        if (\is_array($this->labelList)) {
            Model::validateArray($this->labelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelList) {
            if (\is_array($this->labelList)) {
                $res['LabelList'] = [];
                $n1 = 0;
                foreach ($this->labelList as $item1) {
                    $res['LabelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = [];
                $n1 = 0;
                foreach ($map['LabelList'] as $item1) {
                    $model->labelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
