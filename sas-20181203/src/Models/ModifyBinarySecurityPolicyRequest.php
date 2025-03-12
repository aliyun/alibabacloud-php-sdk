<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyBinarySecurityPolicyRequest extends Model
{
    /**
     * @description Cluster information.
     *
     * This parameter is required.
     * @example [{\\"Namespaces\\":[\\"default\\"],\\"ClusterId\\":\\"c9f5b93a8da8f4341b77***********\\"},{\\"Namespaces\\":[\\"default\\"],\\"ClusterId\\":\\"cc12429dbb8f644f690b0***********\\"}]
     *
     * @var string
     */
    public $clusters;

    /**
     * @description Policy name.
     *
     * @example test-policy-04-11
     *
     * @var string
     */
    public $name;

    /**
     * @description Policy content. JSON format, Key values:
     * - **policyMode**: Type of policy, default is requireAttestor.
     * - **requiredAttestors**: Required attestors.
     *
     * This parameter is required.
     * @example {\\"PolicyMode\\":\\"requireAttestor\\",\\"RequiredAttestors\\":[\\"test-xcs-04-11-hhht\\"]}
     *
     * @var string
     */
    public $policy;

    /**
     * @description Remark.
     *
     * @example Remark
     *
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The IP address of the access source.
     *
     * @example 1.2.3.4
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description Set to enable or disable the policy. Values:
     *
     * - **enabled**: Enable the protection policy.
     * - **disabled**: Disable the protection policy.
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusters'        => 'Clusters',
        'name'            => 'Name',
        'policy'          => 'Policy',
        'remark'          => 'Remark',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp'        => 'SourceIp',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = $this->clusters;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBinarySecurityPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clusters'])) {
            $model->clusters = $map['Clusters'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
