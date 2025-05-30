<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponseBody\data\records\urgentDemandEbsRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponseBody\data\records\urgentDemandEcsRequest;

class records extends Model
{
    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $commodityNum;

    /**
     * @var string
     */
    public $commodityTypeCode;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $effectTime;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $payDuration;

    /**
     * @var string
     */
    public $payDurationUnit;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $planId;

    /**
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
    protected $_name = [
        'zone' => 'Zone',
        'accountId' => 'accountId',
        'commodityCode' => 'commodityCode',
        'commodityNum' => 'commodityNum',
        'commodityTypeCode' => 'commodityTypeCode',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'effectTime' => 'effectTime',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'networkType' => 'networkType',
        'payDuration' => 'payDuration',
        'payDurationUnit' => 'payDurationUnit',
        'payType' => 'payType',
        'planId' => 'planId',
        'region' => 'region',
        'urgentDemandEbsRequest' => 'urgentDemandEbsRequest',
        'urgentDemandEcsRequest' => 'urgentDemandEcsRequest',
    ];

    public function validate()
    {
        if (null !== $this->urgentDemandEbsRequest) {
            $this->urgentDemandEbsRequest->validate();
        }
        if (null !== $this->urgentDemandEcsRequest) {
            $this->urgentDemandEcsRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityNum) {
            $res['commodityNum'] = $this->commodityNum;
        }

        if (null !== $this->commodityTypeCode) {
            $res['commodityTypeCode'] = $this->commodityTypeCode;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->effectTime) {
            $res['effectTime'] = $this->effectTime;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
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
            $res['urgentDemandEbsRequest'] = null !== $this->urgentDemandEbsRequest ? $this->urgentDemandEbsRequest->toArray($noStream) : $this->urgentDemandEbsRequest;
        }

        if (null !== $this->urgentDemandEcsRequest) {
            $res['urgentDemandEcsRequest'] = null !== $this->urgentDemandEcsRequest ? $this->urgentDemandEcsRequest->toArray($noStream) : $this->urgentDemandEcsRequest;
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
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['commodityNum'])) {
            $model->commodityNum = $map['commodityNum'];
        }

        if (isset($map['commodityTypeCode'])) {
            $model->commodityTypeCode = $map['commodityTypeCode'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['effectTime'])) {
            $model->effectTime = $map['effectTime'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
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

        return $model;
    }
}
