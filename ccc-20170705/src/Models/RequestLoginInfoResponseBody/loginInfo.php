<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\RequestLoginInfoResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\RequestLoginInfoResponseBody\loginInfo\roles;
use AlibabaCloud\Tea\Model;

class loginInfo extends Model
{
    /**
     * @var string
     */
    public $agentServerUrl;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $region;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var string
     */
    public $signData;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $webRtcUrl;
    protected $_name = [
        'agentServerUrl' => 'AgentServerUrl',
        'displayName'    => 'DisplayName',
        'extension'      => 'Extension',
        'phoneNumber'    => 'PhoneNumber',
        'region'         => 'Region',
        'roles'          => 'Roles',
        'signData'       => 'SignData',
        'signature'      => 'Signature',
        'tenantId'       => 'TenantId',
        'userName'       => 'UserName',
        'webRtcUrl'      => 'WebRtcUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentServerUrl) {
            $res['AgentServerUrl'] = $this->agentServerUrl;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->signData) {
            $res['SignData'] = $this->signData;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->webRtcUrl) {
            $res['WebRtcUrl'] = $this->webRtcUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentServerUrl'])) {
            $model->agentServerUrl = $map['AgentServerUrl'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }
        if (isset($map['SignData'])) {
            $model->signData = $map['SignData'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WebRtcUrl'])) {
            $model->webRtcUrl = $map['WebRtcUrl'];
        }

        return $model;
    }
}
