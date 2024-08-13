<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeRdStatusResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the current account.
     *
     * @example 125085778340****
     *
     * @var string
     */
    public $currentUid;

    /**
     * @description The type of the Alibaba Cloud account. Valid values:
     *
     *   **MasterAccount**: management account
     *   **DelegatedAdminAccount**: delegated administrator account
     *   **MasterAccount**: member
     *
     * @example MemberAccount
     *
     * @var string
     */
    public $currentUidType;

    /**
     * @description Indicates whether the multi-account management feature is enabled for Anti-DDoS Origin.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether the multi-account management feature is enabled for the current account in Anti-DDoS Origin.
     *
     * @example false
     *
     * @var bool
     */
    public $localEnable;

    /**
     * @description The Alibaba Cloud account ID of the management account in the resource directory.
     *
     * @example 125085778340****
     *
     * @var string
     */
    public $masterUid;

    /**
     * @description Indicates whether Resource Directory is enabled in the [Resource Management console](https://resourcemanager.console.aliyun.com).
     *
     * @example false
     *
     * @var bool
     */
    public $remoteEnable;

    /**
     * @description The request ID.
     *
     * @example 1B0F7EC6-51D7-4D70-B0EC-CD8A9E998D86
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud account ID of the management account for which the multi-account management feature is enabled in Anti-DDoS Origin.
     *
     * @example 125085778340****
     *
     * @var string
     */
    public $rootUid;

    /**
     * @description Indicates whether the trusted service is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $servicePrincipalEnabled;
    protected $_name = [
        'currentUid'              => 'CurrentUid',
        'currentUidType'          => 'CurrentUidType',
        'enabled'                 => 'Enabled',
        'localEnable'             => 'LocalEnable',
        'masterUid'               => 'MasterUid',
        'remoteEnable'            => 'RemoteEnable',
        'requestId'               => 'RequestId',
        'rootUid'                 => 'RootUid',
        'servicePrincipalEnabled' => 'ServicePrincipalEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentUid) {
            $res['CurrentUid'] = $this->currentUid;
        }
        if (null !== $this->currentUidType) {
            $res['CurrentUidType'] = $this->currentUidType;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->localEnable) {
            $res['LocalEnable'] = $this->localEnable;
        }
        if (null !== $this->masterUid) {
            $res['MasterUid'] = $this->masterUid;
        }
        if (null !== $this->remoteEnable) {
            $res['RemoteEnable'] = $this->remoteEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootUid) {
            $res['RootUid'] = $this->rootUid;
        }
        if (null !== $this->servicePrincipalEnabled) {
            $res['ServicePrincipalEnabled'] = $this->servicePrincipalEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentUid'])) {
            $model->currentUid = $map['CurrentUid'];
        }
        if (isset($map['CurrentUidType'])) {
            $model->currentUidType = $map['CurrentUidType'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['LocalEnable'])) {
            $model->localEnable = $map['LocalEnable'];
        }
        if (isset($map['MasterUid'])) {
            $model->masterUid = $map['MasterUid'];
        }
        if (isset($map['RemoteEnable'])) {
            $model->remoteEnable = $map['RemoteEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootUid'])) {
            $model->rootUid = $map['RootUid'];
        }
        if (isset($map['ServicePrincipalEnabled'])) {
            $model->servicePrincipalEnabled = $map['ServicePrincipalEnabled'];
        }

        return $model;
    }
}
