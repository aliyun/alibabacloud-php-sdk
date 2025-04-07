<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppInstanceGroupAttributeShrinkRequest extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * This parameter is required.
     *
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The name of the delivery group.
     *
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @description The network settings.
     *
     * >  If you want to use this parameter, submit a ticket.
     *
     * @var string
     */
    public $networkShrink;

    /**
     * @description The information about the resource group.
     *
     * @var string
     */
    public $nodePoolShrink;

    /**
     * @description Specifies whether only one application can be opened in a session.
     *
     *   After you enable this feature, the system assigns a session to each application if you open multiple applications in a delivery group. This consumes a larger number of sessions.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $perSessionPerApp;

    /**
     * @description The application ID of the pre-open application. If you set `PreOpenMode` to `SINGLE_APP`, you cannot leave this parameter empty.``
     *
     * @example ca-b2ronxxd****
     *
     * @var string
     */
    public $preOpenAppId;

    /**
     * @description The pre-open mode.
     *
     * Valid values:
     *
     *   SINGLE_APP: enables the pre-open mode for a single application.
     *   OFF: disables the pre-open mode. This is the default value.
     *
     * @example OFF
     *
     * @var string
     */
    public $preOpenMode;

    /**
     * @description The product type.
     *
     * Valid value:
     *
     *   CloudApp: App Streaming
     *
     * This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @description The security policy.
     *
     * @var string
     */
    public $securityPolicyShrink;

    /**
     * @description The duration for which sessions are retained after disconnection. Unit: minutes. After an end user disconnects from a session, the session is closed only after the specified duration elapses. If you want to permanently retain sessions, set this parameter to `-1`. Valid values:-1 and 3 to 300. Default value: `15`.
     *
     * @example 15
     *
     * @var int
     */
    public $sessionTimeout;

    /**
     * @description The storage policy.
     *
     * @var string
     */
    public $storagePolicyShrink;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'networkShrink' => 'Network',
        'nodePoolShrink' => 'NodePool',
        'perSessionPerApp' => 'PerSessionPerApp',
        'preOpenAppId' => 'PreOpenAppId',
        'preOpenMode' => 'PreOpenMode',
        'productType' => 'ProductType',
        'securityPolicyShrink' => 'SecurityPolicy',
        'sessionTimeout' => 'SessionTimeout',
        'storagePolicyShrink' => 'StoragePolicy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }
        if (null !== $this->networkShrink) {
            $res['Network'] = $this->networkShrink;
        }
        if (null !== $this->nodePoolShrink) {
            $res['NodePool'] = $this->nodePoolShrink;
        }
        if (null !== $this->perSessionPerApp) {
            $res['PerSessionPerApp'] = $this->perSessionPerApp;
        }
        if (null !== $this->preOpenAppId) {
            $res['PreOpenAppId'] = $this->preOpenAppId;
        }
        if (null !== $this->preOpenMode) {
            $res['PreOpenMode'] = $this->preOpenMode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->securityPolicyShrink) {
            $res['SecurityPolicy'] = $this->securityPolicyShrink;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->storagePolicyShrink) {
            $res['StoragePolicy'] = $this->storagePolicyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppInstanceGroupAttributeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }
        if (isset($map['Network'])) {
            $model->networkShrink = $map['Network'];
        }
        if (isset($map['NodePool'])) {
            $model->nodePoolShrink = $map['NodePool'];
        }
        if (isset($map['PerSessionPerApp'])) {
            $model->perSessionPerApp = $map['PerSessionPerApp'];
        }
        if (isset($map['PreOpenAppId'])) {
            $model->preOpenAppId = $map['PreOpenAppId'];
        }
        if (isset($map['PreOpenMode'])) {
            $model->preOpenMode = $map['PreOpenMode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicyShrink = $map['SecurityPolicy'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['StoragePolicy'])) {
            $model->storagePolicyShrink = $map['StoragePolicy'];
        }

        return $model;
    }
}
