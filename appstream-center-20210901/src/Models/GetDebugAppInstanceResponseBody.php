<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetDebugAppInstanceResponseBody extends Model
{
    /**
     * @description The application ID.
     *
     * @example __DEBUG_APP
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the delivery group.
     *
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the application instance.
     *
     * @example ai-7ybdeiyoeh5e****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The ID of the application version.
     *
     * @example 1.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The authorization code. This authorization code is valid for 3 minutes and can be used only once, regardless of whether the authentication succeeds. If multiple authentication codes are generated for a user, only the latest authentication code takes effect.
     *
     * @example e4e169bea1cc48e8afac53**********
     *
     * @var string
     */
    public $authCode;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The user ID.
     *
     * @example __debug__
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appVersion' => 'AppVersion',
        'authCode' => 'AuthCode',
        'requestId' => 'RequestId',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDebugAppInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
