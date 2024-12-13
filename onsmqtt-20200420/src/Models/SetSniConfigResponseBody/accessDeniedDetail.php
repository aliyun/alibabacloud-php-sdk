<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SetSniConfigResponseBody;

use AlibabaCloud\Tea\Model;

class accessDeniedDetail extends Model
{
    /**
     * @var string
     */
    public $authAction;

    /**
     * @var string
     */
    public $authPrincipalDisplayName;

    /**
     * @var string
     */
    public $authPrincipalOwnerId;

    /**
     * @var string
     */
    public $authPrincipalType;

    /**
     * @var string
     */
    public $encodedDiagnosticMessage;

    /**
     * @var string
     */
    public $noPermissionType;

    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'authAction'               => 'AuthAction',
        'authPrincipalDisplayName' => 'AuthPrincipalDisplayName',
        'authPrincipalOwnerId'     => 'AuthPrincipalOwnerId',
        'authPrincipalType'        => 'AuthPrincipalType',
        'encodedDiagnosticMessage' => 'EncodedDiagnosticMessage',
        'noPermissionType'         => 'NoPermissionType',
        'policyType'               => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authAction) {
            $res['AuthAction'] = $this->authAction;
        }
        if (null !== $this->authPrincipalDisplayName) {
            $res['AuthPrincipalDisplayName'] = $this->authPrincipalDisplayName;
        }
        if (null !== $this->authPrincipalOwnerId) {
            $res['AuthPrincipalOwnerId'] = $this->authPrincipalOwnerId;
        }
        if (null !== $this->authPrincipalType) {
            $res['AuthPrincipalType'] = $this->authPrincipalType;
        }
        if (null !== $this->encodedDiagnosticMessage) {
            $res['EncodedDiagnosticMessage'] = $this->encodedDiagnosticMessage;
        }
        if (null !== $this->noPermissionType) {
            $res['NoPermissionType'] = $this->noPermissionType;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessDeniedDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthAction'])) {
            $model->authAction = $map['AuthAction'];
        }
        if (isset($map['AuthPrincipalDisplayName'])) {
            $model->authPrincipalDisplayName = $map['AuthPrincipalDisplayName'];
        }
        if (isset($map['AuthPrincipalOwnerId'])) {
            $model->authPrincipalOwnerId = $map['AuthPrincipalOwnerId'];
        }
        if (isset($map['AuthPrincipalType'])) {
            $model->authPrincipalType = $map['AuthPrincipalType'];
        }
        if (isset($map['EncodedDiagnosticMessage'])) {
            $model->encodedDiagnosticMessage = $map['EncodedDiagnosticMessage'];
        }
        if (isset($map['NoPermissionType'])) {
            $model->noPermissionType = $map['NoPermissionType'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
