<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\StopEaiJupyterResponseBody;

use AlibabaCloud\Tea\Model;

class accessDeniedDetail extends Model
{
    /**
     * @example eais:StopEaiJupyter
     *
     * @var string
     */
    public $authAction;

    /**
     * @example 20560152949032****
     *
     * @var string
     */
    public $authPrincipalDisplayName;

    /**
     * @example 170718266783****
     *
     * @var string
     */
    public $authPrincipalOwnerId;

    /**
     * @example SubUser
     *
     * @var string
     */
    public $authPrincipalType;

    /**
     * @example AQFmj0FOZo9BTjMyQTFDRkIzLUE5MTItNUIwNC1BQzkxLTcyMUFFQTUyQjhGQQ==
     *
     * @var string
     */
    public $encodedDiagnosticMessage;

    /**
     * @example ExplicitDeny
     *
     * @var string
     */
    public $noPermissionType;

    /**
     * @example AccountLevelIdentityBasedPolicy
     *
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
