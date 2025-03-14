<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateBinarySecurityPolicyRequest extends Model
{
    /**
     * @description The information about the cluster.
     *
     * This parameter is required.
     *
     * @example [{\\"ClusterId\\":\\"cc12429dbb8f644f690b0623fb52b4737\\",\\"Namespaces\\":[\\"default\\"]},{\\"ClusterId\\":\\"c9f5b93a8da8f4341b774d79fdbcedb3c\\",\\"Namespaces\\":[\\"default\\"]}]
     *
     * @var string
     */
    public $clusters;

    /**
     * @description The name of the policy.
     *
     * @example mv-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The content of the policy. Specify a value in the JSON format. You can specify the following keys:
     *
     *   **policyMode**: the type of the policy. Default value: requireAttestor.
     *   **requiredAttestors**: the required witnesses.
     *
     * This parameter is required.
     *
     * @example {\\"PolicyMode\\":\\"requireAttestor\\",\\"RequiredAttestors\\":[\\"test-xcs-04-12-heyuan\\"]}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The description.
     *
     * @example remark test
     *
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address.
     *
     * @example 59.82.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **enable**
     *   **disable**
     *
     * @example enable
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusters' => 'Clusters',
        'name' => 'Name',
        'policy' => 'Policy',
        'remark' => 'Remark',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp' => 'SourceIp',
        'status' => 'Status',
    ];

    public function validate() {}

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
     * @return CreateBinarySecurityPolicyRequest
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
