<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody;

use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage\authConditions;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage\authPrincipal;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage\matchedPolicies;
use AlibabaCloud\Tea\Model;

class decodedDiagnosticMessage extends Model
{
    /**
     * @description The operation that is used for authentication in the request.
     *
     * @example ram:DecodeDiagnosticMessage
     *
     * @var string
     */
    public $authAction;

    /**
     * @description The conditions that are used for authentication in the request.
     *
     * @var authConditions[]
     */
    public $authConditions;

    /**
     * @description The operator that is used for authentication in the request.
     *
     * @var authPrincipal
     */
    public $authPrincipal;

    /**
     * @description The resource that is used for authentication in the request.
     *
     * @example *
     *
     * @var string
     */
    public $authResource;

    /**
     * @description Indicates whether the access denied error is caused by an explicit deny.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $explicitDeny;

    /**
     * @description The policies that are matched.
     *
     * @var matchedPolicies[]
     */
    public $matchedPolicies;

    /**
     * @description The type of the policy that causes the access denied error.
     *
     * Valid values:
     *
     *   AssumeRolePolicy: role-specific trust policy
     *   ControlPolicy: control policy
     *   AccountLevelIdentityBasedPolicy: identity-based policy at the account level
     *   ResourceGroupLevelIdentityBasedPolicy: identity-based policy at the resource group level
     *   SessionPolicy: session policy
     *
     * @example AccountLevelIdentityBasedPolicy
     *
     * @var string
     */
    public $noPermissionPolicyType;
    protected $_name = [
        'authAction'             => 'AuthAction',
        'authConditions'         => 'AuthConditions',
        'authPrincipal'          => 'AuthPrincipal',
        'authResource'           => 'AuthResource',
        'explicitDeny'           => 'ExplicitDeny',
        'matchedPolicies'        => 'MatchedPolicies',
        'noPermissionPolicyType' => 'NoPermissionPolicyType',
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
        if (null !== $this->authConditions) {
            $res['AuthConditions'] = [];
            if (null !== $this->authConditions && \is_array($this->authConditions)) {
                $n = 0;
                foreach ($this->authConditions as $item) {
                    $res['AuthConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authPrincipal) {
            $res['AuthPrincipal'] = null !== $this->authPrincipal ? $this->authPrincipal->toMap() : null;
        }
        if (null !== $this->authResource) {
            $res['AuthResource'] = $this->authResource;
        }
        if (null !== $this->explicitDeny) {
            $res['ExplicitDeny'] = $this->explicitDeny;
        }
        if (null !== $this->matchedPolicies) {
            $res['MatchedPolicies'] = [];
            if (null !== $this->matchedPolicies && \is_array($this->matchedPolicies)) {
                $n = 0;
                foreach ($this->matchedPolicies as $item) {
                    $res['MatchedPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->noPermissionPolicyType) {
            $res['NoPermissionPolicyType'] = $this->noPermissionPolicyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return decodedDiagnosticMessage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthAction'])) {
            $model->authAction = $map['AuthAction'];
        }
        if (isset($map['AuthConditions'])) {
            if (!empty($map['AuthConditions'])) {
                $model->authConditions = [];
                $n                     = 0;
                foreach ($map['AuthConditions'] as $item) {
                    $model->authConditions[$n++] = null !== $item ? authConditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthPrincipal'])) {
            $model->authPrincipal = authPrincipal::fromMap($map['AuthPrincipal']);
        }
        if (isset($map['AuthResource'])) {
            $model->authResource = $map['AuthResource'];
        }
        if (isset($map['ExplicitDeny'])) {
            $model->explicitDeny = $map['ExplicitDeny'];
        }
        if (isset($map['MatchedPolicies'])) {
            if (!empty($map['MatchedPolicies'])) {
                $model->matchedPolicies = [];
                $n                      = 0;
                foreach ($map['MatchedPolicies'] as $item) {
                    $model->matchedPolicies[$n++] = null !== $item ? matchedPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NoPermissionPolicyType'])) {
            $model->noPermissionPolicyType = $map['NoPermissionPolicyType'];
        }

        return $model;
    }
}
