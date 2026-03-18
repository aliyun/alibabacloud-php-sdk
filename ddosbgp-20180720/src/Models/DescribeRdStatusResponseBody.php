<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;

class DescribeRdStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $currentUid;

    /**
     * @var string
     */
    public $currentUidType;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $localEnable;

    /**
     * @var string
     */
    public $masterUid;

    /**
     * @var bool
     */
    public $remoteEnable;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rootUid;

    /**
     * @var bool
     */
    public $servicePrincipalEnabled;
    protected $_name = [
        'currentUid' => 'CurrentUid',
        'currentUidType' => 'CurrentUidType',
        'enabled' => 'Enabled',
        'localEnable' => 'LocalEnable',
        'masterUid' => 'MasterUid',
        'remoteEnable' => 'RemoteEnable',
        'requestId' => 'RequestId',
        'rootUid' => 'RootUid',
        'servicePrincipalEnabled' => 'ServicePrincipalEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
