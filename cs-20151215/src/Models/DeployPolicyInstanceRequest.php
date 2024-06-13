<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeployPolicyInstanceRequest extends Model
{
    /**
     * @description The action of the policy. Valid values:
     *
     *   `deny`: Deployments that match the policy are denied.
     *   `warn`: Alerts are generated for Deployments that match the policy.
     *
     * @example deny
     *
     * @var string
     */
    public $action;

    /**
     * @description The namespaces to which the policy applies. If you leave this parameter empty, the policy is applicable to all namespaces of the cluster.
     *
     * @var string[]
     */
    public $namespaces;

    /**
     * @description The parameter settings of the policy. For more information about the parameters supported by each policy, see [Predefined security policies of ACK](https://www.alibabacloud.com/help/doc-detail/359819.html).
     *
     * @example {"restrictedNamespaces": [ "test" ]}
     *
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'action'     => 'action',
        'namespaces' => 'namespaces',
        'parameters' => 'parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->namespaces) {
            $res['namespaces'] = $this->namespaces;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployPolicyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['namespaces'])) {
            if (!empty($map['namespaces'])) {
                $model->namespaces = $map['namespaces'];
            }
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }

        return $model;
    }
}
