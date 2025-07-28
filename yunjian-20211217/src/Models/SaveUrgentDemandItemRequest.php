<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemRequest\urgentDemandEbsRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemRequest\urgentDemandEcsRequest;
use AlibabaCloud\Tea\Model;

class SaveUrgentDemandItemRequest extends Model
{
    /**
     * @example 12321312
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 111222
     *
     * @var string
     */
    public $creator;

    /**
     * @example 2021-12-27 00:00:00
     *
     * @var string
     */
    public $effectTime;

    /**
     * @example 111222
     *
     * @var string
     */
    public $modifier;

    /**
     * @example 网络类型 vpc（私有网络）/classic（经典网络）
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 10
     *
     * @var string
     */
    public $payDuration;

    /**
     * @example 购买时长单位(month(月)，week(周)，day(天))
     *
     * @var string
     */
    public $payDurationUnit;

    /**
     * @example 付费类型 prepay(预付费)/postpay（后付费）
     *
     * @var string
     */
    public $payType;

    /**
     * @example 111222
     *
     * @var int
     */
    public $planId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @var urgentDemandEbsRequest
     */
    public $urgentDemandEbsRequest;

    /**
     * @var urgentDemandEcsRequest
     */
    public $urgentDemandEcsRequest;

    /**
     * @example cn-beijing-a
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'accountId' => 'accountId',
        'creator' => 'creator',
        'effectTime' => 'effectTime',
        'modifier' => 'modifier',
        'networkType' => 'networkType',
        'payDuration' => 'payDuration',
        'payDurationUnit' => 'payDurationUnit',
        'payType' => 'payType',
        'planId' => 'planId',
        'region' => 'region',
        'urgentDemandEbsRequest' => 'urgentDemandEbsRequest',
        'urgentDemandEcsRequest' => 'urgentDemandEcsRequest',
        'zone' => 'zone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->effectTime) {
            $res['effectTime'] = $this->effectTime;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->payDuration) {
            $res['payDuration'] = $this->payDuration;
        }
        if (null !== $this->payDurationUnit) {
            $res['payDurationUnit'] = $this->payDurationUnit;
        }
        if (null !== $this->payType) {
            $res['payType'] = $this->payType;
        }
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->urgentDemandEbsRequest) {
            $res['urgentDemandEbsRequest'] = null !== $this->urgentDemandEbsRequest ? $this->urgentDemandEbsRequest->toMap() : null;
        }
        if (null !== $this->urgentDemandEcsRequest) {
            $res['urgentDemandEcsRequest'] = null !== $this->urgentDemandEcsRequest ? $this->urgentDemandEcsRequest->toMap() : null;
        }
        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveUrgentDemandItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['effectTime'])) {
            $model->effectTime = $map['effectTime'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['payDuration'])) {
            $model->payDuration = $map['payDuration'];
        }
        if (isset($map['payDurationUnit'])) {
            $model->payDurationUnit = $map['payDurationUnit'];
        }
        if (isset($map['payType'])) {
            $model->payType = $map['payType'];
        }
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['urgentDemandEbsRequest'])) {
            $model->urgentDemandEbsRequest = urgentDemandEbsRequest::fromMap($map['urgentDemandEbsRequest']);
        }
        if (isset($map['urgentDemandEcsRequest'])) {
            $model->urgentDemandEcsRequest = urgentDemandEcsRequest::fromMap($map['urgentDemandEcsRequest']);
        }
        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }

        return $model;
    }
}
