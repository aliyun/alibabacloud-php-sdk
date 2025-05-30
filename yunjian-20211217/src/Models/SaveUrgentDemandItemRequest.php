<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemRequest\urgentDemandEbsRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemRequest\urgentDemandEcsRequest;

class SaveUrgentDemandItemRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $effectTime;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
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

    /**
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
            $res['urgentDemandEbsRequest'] = null !== $this->urgentDemandEbsRequest ? $this->urgentDemandEbsRequest->toArray($noStream) : $this->urgentDemandEbsRequest;
        }

        if (null !== $this->urgentDemandEcsRequest) {
            $res['urgentDemandEcsRequest'] = null !== $this->urgentDemandEcsRequest ? $this->urgentDemandEcsRequest->toArray($noStream) : $this->urgentDemandEcsRequest;
        }

        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
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
