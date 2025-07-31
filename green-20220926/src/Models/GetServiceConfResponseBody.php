<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetServiceConfResponseBody extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $customServiceConf;

    /**
     * @example 2023-01-17 12:29:56
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example OK
     *
     * @var string
     */
    public $msg;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $option;

    /**
     * @example 6CF2815C-****-****-B52E-FF6E2****492
     *
     * @var string
     */
    public $requestId;

    /**
     * @example image
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @description UID。
     *
     * @example 17726*****370735
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'classify' => 'Classify',
        'code' => 'Code',
        'customServiceConf' => 'CustomServiceConf',
        'gmtModified' => 'GmtModified',
        'msg' => 'Msg',
        'option' => 'Option',
        'requestId' => 'RequestId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'serviceType' => 'ServiceType',
        'success' => 'Success',
        'uid' => 'Uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->customServiceConf) {
            $res['CustomServiceConf'] = $this->customServiceConf;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceConfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CustomServiceConf'])) {
            $model->customServiceConf = $map['CustomServiceConf'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
