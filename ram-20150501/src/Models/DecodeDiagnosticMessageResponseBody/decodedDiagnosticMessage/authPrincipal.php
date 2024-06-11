<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage;

use AlibabaCloud\Tea\Model;

class authPrincipal extends Model
{
    /**
     * @description The identity.
     *
     *   If the operator is a RAM user, the ID of the user is displayed.
     *   If the operator is a RAM role, the name and session name of the role are displayed. Example: RoleName:RoleSessionName.
     *   If the operator is an SSO federated identity, the type and name of the identity provider (IdP) are displayed. Example: saml-provider/AzureAD.
     *
     * @example 28877424437521****
     *
     * @var string
     */
    public $authPrincipalDisplayName;

    /**
     * @description The ID of the Alibaba Cloud account to which the identity belongs.
     *
     * @example 196813200012****
     *
     * @var string
     */
    public $authPrincipalOwnerId;

    /**
     * @description The identity type that is used for authentication in the request.
     *
     * Valid values:
     *
     *   SubUser: RAM user
     *   AssumedRoleUser: RAM role
     *   Federated: SSO federated identity
     *
     * @example SubUser
     *
     * @var string
     */
    public $authPrincipalType;
    protected $_name = [
        'authPrincipalDisplayName' => 'AuthPrincipalDisplayName',
        'authPrincipalOwnerId'     => 'AuthPrincipalOwnerId',
        'authPrincipalType'        => 'AuthPrincipalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authPrincipalDisplayName) {
            $res['AuthPrincipalDisplayName'] = $this->authPrincipalDisplayName;
        }
        if (null !== $this->authPrincipalOwnerId) {
            $res['AuthPrincipalOwnerId'] = $this->authPrincipalOwnerId;
        }
        if (null !== $this->authPrincipalType) {
            $res['AuthPrincipalType'] = $this->authPrincipalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authPrincipal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthPrincipalDisplayName'])) {
            $model->authPrincipalDisplayName = $map['AuthPrincipalDisplayName'];
        }
        if (isset($map['AuthPrincipalOwnerId'])) {
            $model->authPrincipalOwnerId = $map['AuthPrincipalOwnerId'];
        }
        if (isset($map['AuthPrincipalType'])) {
            $model->authPrincipalType = $map['AuthPrincipalType'];
        }

        return $model;
    }
}
