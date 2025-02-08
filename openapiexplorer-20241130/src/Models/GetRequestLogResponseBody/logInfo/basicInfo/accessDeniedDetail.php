<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo\basicInfo;

use AlibabaCloud\Dara\Model;

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
        'authAction'               => 'authAction',
        'authPrincipalDisplayName' => 'authPrincipalDisplayName',
        'authPrincipalOwnerId'     => 'authPrincipalOwnerId',
        'authPrincipalType'        => 'authPrincipalType',
        'encodedDiagnosticMessage' => 'encodedDiagnosticMessage',
        'noPermissionType'         => 'noPermissionType',
        'policyType'               => 'policyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authAction) {
            $res['authAction'] = $this->authAction;
        }

        if (null !== $this->authPrincipalDisplayName) {
            $res['authPrincipalDisplayName'] = $this->authPrincipalDisplayName;
        }

        if (null !== $this->authPrincipalOwnerId) {
            $res['authPrincipalOwnerId'] = $this->authPrincipalOwnerId;
        }

        if (null !== $this->authPrincipalType) {
            $res['authPrincipalType'] = $this->authPrincipalType;
        }

        if (null !== $this->encodedDiagnosticMessage) {
            $res['encodedDiagnosticMessage'] = $this->encodedDiagnosticMessage;
        }

        if (null !== $this->noPermissionType) {
            $res['noPermissionType'] = $this->noPermissionType;
        }

        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
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
        if (isset($map['authAction'])) {
            $model->authAction = $map['authAction'];
        }

        if (isset($map['authPrincipalDisplayName'])) {
            $model->authPrincipalDisplayName = $map['authPrincipalDisplayName'];
        }

        if (isset($map['authPrincipalOwnerId'])) {
            $model->authPrincipalOwnerId = $map['authPrincipalOwnerId'];
        }

        if (isset($map['authPrincipalType'])) {
            $model->authPrincipalType = $map['authPrincipalType'];
        }

        if (isset($map['encodedDiagnosticMessage'])) {
            $model->encodedDiagnosticMessage = $map['encodedDiagnosticMessage'];
        }

        if (isset($map['noPermissionType'])) {
            $model->noPermissionType = $map['noPermissionType'];
        }

        if (isset($map['policyType'])) {
            $model->policyType = $map['policyType'];
        }

        return $model;
    }
}
