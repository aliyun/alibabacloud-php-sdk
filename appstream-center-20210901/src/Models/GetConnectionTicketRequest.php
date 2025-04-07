<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketRequest extends Model
{
    /**
     * @example INTERNET
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The application ID.
     *
     * >  This parameter is required for the first call to this operation and optional for subsequent calls to the operation.
     *
     * @example ca-e4s0puhmwi7v****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The delivery groups.
     *
     * > *   If you configure this parameter, the system assigns application instances only among the specified authorized delivery groups.
     * > *   This parameter is required if you configure `AppInstanceId` or `AppInstancePersistentId`.
     *
     * @var string[]
     */
    public $appInstanceGroupIdList;

    /**
     * @description The ID of the application instance.
     *
     * > *   If you configure this parameter, the system attempts to assign only the specified application instance.
     * > *   If you configure this parameter, you must also configure `AppInstanceGroupIdList` and the number of delivery groups specified by `AppInstanceGroupIdList` must be 1.
     *
     * @example ai-1rznfnrvsa99d****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The ID of the persistent session.
     *
     * @example p-0bxls9m3cl7s****
     *
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @description The parameters that are configured to start the application. For information about how to obtain these parameters, see [Obtain parameters configured to install and start an application](https://help.aliyun.com/document_detail/426045.html).
     *
     * @example /q /n
     *
     * @var string
     */
    public $appStartParam;

    /**
     * @description The application version. If you configure this parameter, only an application of the specified version is started. If you do not configure this parameter, an application of a random authorized version is started.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The region ID.
     *
     * >  If you configure this parameter, the system assigns application instances only among the delivery groups that reside in the specified region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The ID of the convenience account.
     *
     * This parameter is required.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The product type.
     *
     * Valid values:
     *
     *   CloudApp: App Streaming
     *   AndroidCloud: Cloud Phone
     *
     * This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @description The task ID.
     *
     * >  This parameter is required for calls other than the first call to this operation. You can use this parameter to query the task status and connection credential.
     *
     * @example 28778acb-a469-4bc0-8e0f****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'accessType' => 'AccessType',
        'appId' => 'AppId',
        'appInstanceGroupIdList' => 'AppInstanceGroupIdList',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'appStartParam' => 'AppStartParam',
        'appVersion' => 'AppVersion',
        'bizRegionId' => 'BizRegionId',
        'endUserId' => 'EndUserId',
        'productType' => 'ProductType',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceGroupIdList) {
            $res['AppInstanceGroupIdList'] = $this->appInstanceGroupIdList;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }
        if (null !== $this->appStartParam) {
            $res['AppStartParam'] = $this->appStartParam;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectionTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupIdList'])) {
            if (!empty($map['AppInstanceGroupIdList'])) {
                $model->appInstanceGroupIdList = $map['AppInstanceGroupIdList'];
            }
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }
        if (isset($map['AppStartParam'])) {
            $model->appStartParam = $map['AppStartParam'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
