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
    public $displayName;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $signData;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $agentServerUrl;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $webRtcUrl;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'signature'      => 'Signature',
        'extension'      => 'Extension',
        'signData'       => 'SignData',
        'phoneNumber'    => 'PhoneNumber',
        'region'         => 'Region',
        'agentServerUrl' => 'AgentServerUrl',
        'roles'          => 'Roles',
        'userName'       => 'UserName',
        'webRtcUrl'      => 'WebRtcUrl',
        'tenantId'       => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->signData) {
            $res['SignData'] = $this->signData;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->agentServerUrl) {
            $res['AgentServerUrl'] = $this->agentServerUrl;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->webRtcUrl) {
            $res['WebRtcUrl'] = $this->webRtcUrl;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['SignData'])) {
            $model->signData = $map['SignData'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AgentServerUrl'])) {
            $model->agentServerUrl = $map['AgentServerUrl'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WebRtcUrl'])) {
            $model->webRtcUrl = $map['WebRtcUrl'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
