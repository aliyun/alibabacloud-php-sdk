<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models;

use AlibabaCloud\Dara\Model;

class AuthenticateRequest extends Model
{
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
    public $operateCode;

    /**
     * @var string
     */
    public $operatorTypeEnum;

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
        'instanceId' => 'InstanceId',
        'language' => 'Language',
        'operateCode' => 'OperateCode',
        'operatorTypeEnum' => 'OperatorTypeEnum',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }

        if (null !== $this->operatorTypeEnum) {
            $res['OperatorTypeEnum'] = $this->operatorTypeEnum;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        if (isset($map['OperatorTypeEnum'])) {
            $model->operatorTypeEnum = $map['OperatorTypeEnum'];
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
