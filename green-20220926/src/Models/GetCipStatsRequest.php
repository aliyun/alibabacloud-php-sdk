<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetCipStatsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $byMonth;

    /**
     * @example 2024-03-11 10:00:00
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
     * @var string
     */
    public $serviceCode;

    /**
     * @example 2024-03-10 10:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 253552244990701265
     *
     * @var string
     */
    public $subUid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'byMonth' => 'ByMonth',
        'endDate' => 'EndDate',
        'label' => 'Label',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'startDate' => 'StartDate',
        'subUid' => 'SubUid',
        'type' => 'Type',
    ];

    public function validate() {}

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
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCipStatsRequest
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
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
