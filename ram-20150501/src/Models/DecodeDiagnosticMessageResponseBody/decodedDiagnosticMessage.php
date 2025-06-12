<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage\authConditions;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage\authPrincipal;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage\matchedPolicies;

class decodedDiagnosticMessage extends Model
{
    /**
     * @var string
     */
    public $authAction;

    /**
     * @var authConditions[]
     */
    public $authConditions;

    /**
     * @var authPrincipal
     */
    public $authPrincipal;

    /**
     * @var string
     */
    public $authResource;

    /**
     * @var bool
     */
    public $explicitDeny;

    /**
     * @var matchedPolicies[]
     */
    public $matchedPolicies;

    /**
     * @var string
     */
    public $noPermissionPolicyType;
    protected $_name = [
        'authAction' => 'AuthAction',
        'authConditions' => 'AuthConditions',
        'authPrincipal' => 'AuthPrincipal',
        'authResource' => 'AuthResource',
        'explicitDeny' => 'ExplicitDeny',
        'matchedPolicies' => 'MatchedPolicies',
        'noPermissionPolicyType' => 'NoPermissionPolicyType',
    ];

    public function validate()
    {
        if (\is_array($this->authConditions)) {
            Model::validateArray($this->authConditions);
        }
        if (null !== $this->authPrincipal) {
            $this->authPrincipal->validate();
        }
        if (\is_array($this->matchedPolicies)) {
            Model::validateArray($this->matchedPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authAction) {
            $res['AuthAction'] = $this->authAction;
        }

        if (null !== $this->authConditions) {
            if (\is_array($this->authConditions)) {
                $res['AuthConditions'] = [];
                $n1 = 0;
                foreach ($this->authConditions as $item1) {
                    $res['AuthConditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->authPrincipal) {
            $res['AuthPrincipal'] = null !== $this->authPrincipal ? $this->authPrincipal->toArray($noStream) : $this->authPrincipal;
        }

        if (null !== $this->authResource) {
            $res['AuthResource'] = $this->authResource;
        }

        if (null !== $this->explicitDeny) {
            $res['ExplicitDeny'] = $this->explicitDeny;
        }

        if (null !== $this->matchedPolicies) {
            if (\is_array($this->matchedPolicies)) {
                $res['MatchedPolicies'] = [];
                $n1 = 0;
                foreach ($this->matchedPolicies as $item1) {
                    $res['MatchedPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->noPermissionPolicyType) {
            $res['NoPermissionPolicyType'] = $this->noPermissionPolicyType;
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
        if (isset($map['AuthAction'])) {
            $model->authAction = $map['AuthAction'];
        }

        if (isset($map['AuthConditions'])) {
            if (!empty($map['AuthConditions'])) {
                $model->authConditions = [];
                $n1 = 0;
                foreach ($map['AuthConditions'] as $item1) {
                    $model->authConditions[$n1++] = authConditions::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['MatchedPolicies'] as $item1) {
                    $model->matchedPolicies[$n1++] = matchedPolicies::fromMap($item1);
                }
            }
        }

        if (isset($map['NoPermissionPolicyType'])) {
            $model->noPermissionPolicyType = $map['NoPermissionPolicyType'];
        }

        return $model;
    }
}
