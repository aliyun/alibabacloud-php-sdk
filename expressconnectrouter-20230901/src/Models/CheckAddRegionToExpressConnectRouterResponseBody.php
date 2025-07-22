<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class CheckAddRegionToExpressConnectRouterResponseBody extends Model
{
    /**
     * @description The details about the access denial.
     *
     * @example Authentication is failed for ****
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description Indicates whether the ECR is used to establish connections between regions in the Chinese mainland and regions outside China. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $anyCrossBorderLink;

    /**
     * @description Indicates whether the ECR is used to establish connections between regions in the Chinese mainland. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $anyInterRegionLink;

    /**
     * @description The response code. The status code 200 indicates that the request was successful. Other status codes indicate that the request failed. For more information, see Error codes.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The dynamic error code.
     *
     * @example IllegalParamFormat.EcrId
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the `%s` variable in **ErrMessage**.
     *
     * >  For example, if the value of **ErrMessage** is **The Value of Input Parameter %s is not valid** and the value of **DynamicMessage** is **DtsInstanceId**, the request parameter **DtsInstanceId** is invalid.
     *
     * @example The param format of EcrId **** is illegal.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description Indicates whether the cross-border CDT service is activated for the account to which the ECR belongs. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isCdtCrossBorderEnabled;

    /**
     * @description Indicates whether the CDT service is activated for the account to which the ECR belongs. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isCdtInterRegionEnabled;

    /**
     * @description Indicates whether the account to which the ECR belongs can create cross-border connections. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isUserAllowedToCreateCrossBorderLink;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 6FABF516-FED3-5697-BDA2-B18C5D9A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example True
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CheckAddRegionToExpressConnectRouterResponseBody
     */
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
