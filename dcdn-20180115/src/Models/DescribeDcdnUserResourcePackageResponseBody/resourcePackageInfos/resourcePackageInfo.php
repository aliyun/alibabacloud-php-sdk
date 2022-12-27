<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageResponseBody\resourcePackageInfos;

use AlibabaCloud\Tea\Model;

class resourcePackageInfo extends Model
{
    /**
     * @example dcdnpaybag
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 10000000
     *
     * @var string
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 2022-08-24T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10000000
     *
     * @var string
     */
    public $initCapacity;

    /**
     * @example CDNFLOWBAG-cn-7pp2bihrb01ii0
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2021-08-24T04:09:22Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example valid
     *
     * @var string
     */
    public $status;

    /**
     * @example FPT_dcdnpaybag_deadlineAcc_1541151058
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'currCapacity'  => 'CurrCapacity',
        'displayName'   => 'DisplayName',
        'endTime'       => 'EndTime',
        'initCapacity'  => 'InitCapacity',
        'instanceId'    => 'InstanceId',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'templateName'  => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePackageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
