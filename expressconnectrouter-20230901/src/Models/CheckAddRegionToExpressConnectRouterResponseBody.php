<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;

class CheckAddRegionToExpressConnectRouterResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var bool
     */
    public $anyCrossBorderLink;

    /**
     * @var bool
     */
    public $anyInterRegionLink;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $isCdtCrossBorderEnabled;

    /**
     * @var bool
     */
    public $isCdtInterRegionEnabled;

    /**
     * @var bool
     */
    public $isUserAllowedToCreateCrossBorderLink;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'anyCrossBorderLink' => 'AnyCrossBorderLink',
        'anyInterRegionLink' => 'AnyInterRegionLink',
        'code' => 'Code',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'isCdtCrossBorderEnabled' => 'IsCdtCrossBorderEnabled',
        'isCdtInterRegionEnabled' => 'IsCdtInterRegionEnabled',
        'isUserAllowedToCreateCrossBorderLink' => 'IsUserAllowedToCreateCrossBorderLink',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->anyCrossBorderLink) {
            $res['AnyCrossBorderLink'] = $this->anyCrossBorderLink;
        }

        if (null !== $this->anyInterRegionLink) {
            $res['AnyInterRegionLink'] = $this->anyInterRegionLink;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->isCdtCrossBorderEnabled) {
            $res['IsCdtCrossBorderEnabled'] = $this->isCdtCrossBorderEnabled;
        }

        if (null !== $this->isCdtInterRegionEnabled) {
            $res['IsCdtInterRegionEnabled'] = $this->isCdtInterRegionEnabled;
        }

        if (null !== $this->isUserAllowedToCreateCrossBorderLink) {
            $res['IsUserAllowedToCreateCrossBorderLink'] = $this->isUserAllowedToCreateCrossBorderLink;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['AnyCrossBorderLink'])) {
            $model->anyCrossBorderLink = $map['AnyCrossBorderLink'];
        }

        if (isset($map['AnyInterRegionLink'])) {
            $model->anyInterRegionLink = $map['AnyInterRegionLink'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['IsCdtCrossBorderEnabled'])) {
            $model->isCdtCrossBorderEnabled = $map['IsCdtCrossBorderEnabled'];
        }

        if (isset($map['IsCdtInterRegionEnabled'])) {
            $model->isCdtInterRegionEnabled = $map['IsCdtInterRegionEnabled'];
        }

        if (isset($map['IsUserAllowedToCreateCrossBorderLink'])) {
            $model->isUserAllowedToCreateCrossBorderLink = $map['IsUserAllowedToCreateCrossBorderLink'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
