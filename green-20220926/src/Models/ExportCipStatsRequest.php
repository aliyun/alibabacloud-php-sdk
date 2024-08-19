<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ExportCipStatsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $byMonth;

    /**
     * @example 2024-04-16 09:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example xx
     *
     * @var string
     */
    public $label;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example text
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2024-04-15 09:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 268220485413130979
     *
     * @var string
     */
    public $subUid;
    protected $_name = [
        'byMonth'      => 'ByMonth',
        'endDate'      => 'EndDate',
        'label'        => 'Label',
        'regionId'     => 'RegionId',
        'resourceType' => 'ResourceType',
        'startDate'    => 'StartDate',
        'subUid'       => 'SubUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byMonth) {
            $res['ByMonth'] = $this->byMonth;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportCipStatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByMonth'])) {
            $model->byMonth = $map['ByMonth'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }

        return $model;
    }
}
