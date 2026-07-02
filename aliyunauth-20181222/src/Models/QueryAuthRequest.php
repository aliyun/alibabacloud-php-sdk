<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models;

use AlibabaCloud\Dara\Model;

class QueryAuthRequest extends Model
{
    /**
     * @var string
     */
    public $bizNo;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $operatorTypeEnum;

    /**
     * @var string
     */
    public $orderVid;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $requestFromApp;

    /**
     * @var string
     */
    public $requestWay;

    /**
     * @var string
     */
    public $userNo;
    protected $_name = [
        'bizNo' => 'BizNo',
        'channel' => 'Channel',
        'instanceId' => 'InstanceId',
        'language' => 'Language',
        'operatorTypeEnum' => 'OperatorTypeEnum',
        'orderVid' => 'OrderVid',
        'productCode' => 'ProductCode',
        'requestFromApp' => 'RequestFromApp',
        'requestWay' => 'RequestWay',
        'userNo' => 'UserNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizNo) {
            $res['BizNo'] = $this->bizNo;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->operatorTypeEnum) {
            $res['OperatorTypeEnum'] = $this->operatorTypeEnum;
        }

        if (null !== $this->orderVid) {
            $res['OrderVid'] = $this->orderVid;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->requestFromApp) {
            $res['RequestFromApp'] = $this->requestFromApp;
        }

        if (null !== $this->requestWay) {
            $res['RequestWay'] = $this->requestWay;
        }

        if (null !== $this->userNo) {
            $res['UserNo'] = $this->userNo;
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
        if (isset($map['BizNo'])) {
            $model->bizNo = $map['BizNo'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['OperatorTypeEnum'])) {
            $model->operatorTypeEnum = $map['OperatorTypeEnum'];
        }

        if (isset($map['OrderVid'])) {
            $model->orderVid = $map['OrderVid'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RequestFromApp'])) {
            $model->requestFromApp = $map['RequestFromApp'];
        }

        if (isset($map['RequestWay'])) {
            $model->requestWay = $map['RequestWay'];
        }

        if (isset($map['UserNo'])) {
            $model->userNo = $map['UserNo'];
        }

        return $model;
    }
}
