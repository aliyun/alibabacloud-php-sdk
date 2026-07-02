<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models;

use AlibabaCloud\Dara\Model;

class QueryInEffectQuthOrderRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $channel;

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
    public $requestFromApp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestWay;

    /**
     * @var string
     */
    public $userNo;
    protected $_name = [
        'bizCode' => 'BizCode',
        'channel' => 'Channel',
        'language' => 'Language',
        'operatorTypeEnum' => 'OperatorTypeEnum',
        'requestFromApp' => 'RequestFromApp',
        'requestId' => 'RequestId',
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
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->operatorTypeEnum) {
            $res['OperatorTypeEnum'] = $this->operatorTypeEnum;
        }

        if (null !== $this->requestFromApp) {
            $res['RequestFromApp'] = $this->requestFromApp;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['OperatorTypeEnum'])) {
            $model->operatorTypeEnum = $map['OperatorTypeEnum'];
        }

        if (isset($map['RequestFromApp'])) {
            $model->requestFromApp = $map['RequestFromApp'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
