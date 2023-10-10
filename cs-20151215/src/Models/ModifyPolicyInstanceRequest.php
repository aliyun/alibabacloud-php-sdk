<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyInstanceRequest extends Model
{
    /**
     * @description The action of the policy. Valid values:
     *
     *   `deny`: Deployments that match the policy are denied.
     *   `warn`: Alerts are generated for deployments that match the policy.
     *
     * @example deny
     *
     * @var string
     */
    public $action;

    /**
     * @description The ID of the policy instance.
     *
     * @example allowed-repos-cbhhb
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The namespaces to which the policy is applied. The policy is applied to all namespaces if this parameter is left empty.
     *
     * @var string[]
     */
    public $namespaces;

    /**
     * @description The parameters of the policy instance. For more information, see [Predefined security policies of ACK](~~359819~~).
     *
     * @example "restrictedNamespaces": [ "test" ]
     *
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'action'       => 'action',
        'instanceName' => 'instance_name',
        'namespaces'   => 'namespaces',
        'parameters'   => 'parameters',
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
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
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
     * @return ModifyPolicyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
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
