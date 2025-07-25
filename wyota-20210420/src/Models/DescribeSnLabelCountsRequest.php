<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelList) {
            $res['LabelList'] = $this->labelList;
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

    /**
     * @param array $map
     *
     * @return DescribeSnLabelCountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = $map['LabelList'];
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
