<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponseBody\data;

use AlibabaCloud\Dara\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $bindingType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $jitProvisionStatus;

    /**
     * @var string
     */
    public $jitUpdateStatus;

    /**
     * @var string
     */
    public $loginUrl;

    /**
     * @var string
     */
    public $ssoStatus;
    protected $_name = [
        'bindingType' => 'bindingType',
        'entityId' => 'entityId',
        'jitProvisionStatus' => 'jitProvisionStatus',
        'jitUpdateStatus' => 'jitUpdateStatus',
        'loginUrl' => 'loginUrl',
        'ssoStatus' => 'ssoStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingType) {
            $res['bindingType'] = $this->bindingType;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->jitProvisionStatus) {
            $res['jitProvisionStatus'] = $this->jitProvisionStatus;
        }

        if (null !== $this->jitUpdateStatus) {
            $res['jitUpdateStatus'] = $this->jitUpdateStatus;
        }

        if (null !== $this->loginUrl) {
            $res['loginUrl'] = $this->loginUrl;
        }

        if (null !== $this->ssoStatus) {
            $res['ssoStatus'] = $this->ssoStatus;
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
        if (isset($map['bindingType'])) {
            $model->bindingType = $map['bindingType'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['jitProvisionStatus'])) {
            $model->jitProvisionStatus = $map['jitProvisionStatus'];
        }

        if (isset($map['jitUpdateStatus'])) {
            $model->jitUpdateStatus = $map['jitUpdateStatus'];
        }

        if (isset($map['loginUrl'])) {
            $model->loginUrl = $map['loginUrl'];
        }

        if (isset($map['ssoStatus'])) {
            $model->ssoStatus = $map['ssoStatus'];
        }

        return $model;
    }
}
