<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageResponseBody\resourcePackageInfos;

use AlibabaCloud\Tea\Model;

class resourcePackageInfo extends Model
{
    /**
     * @description The commodity code of the resource plan.
     *
     * @example dcdnpaybag
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The remaining quota of the resource plan.
     *
     *   The unit for traffic: bytes.
     *   The unit for requests: count.
     *
     * @example 10000000
     *
     * @var string
     */
    public $currCapacity;

    /**
     * @description The name of the resource plan.
     *
     * @example HTTPS requests for static content
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the resource plan expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-08-24T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The total quota of the resource plan.
     *
     *   The unit for traffic: bytes.
     *   The unit for requests: count.
     *
     * @example 10000000
     *
     * @var string
     */
    public $initCapacity;

    /**
     * @description The ID of the resource plan.
     *
     * @example CDNFLOWBAG-cn-7pp2bihrb01ii0
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the resource plan takes effect. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-08-24T04:09:22Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the resource plan. Valid values:
     *
     *   **valid**: The resource plan is valid.
     *   **closed**: The resource package is expired.
     *
     * @example valid
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the template.
     *
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
