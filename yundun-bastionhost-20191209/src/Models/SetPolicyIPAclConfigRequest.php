<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyIPAclConfigRequest\IPAclConfig;
use AlibabaCloud\Tea\Model;

class SetPolicyIPAclConfigRequest extends Model
{
    /**
     * @description The access control settings for source IP addresses.
     *
     * This parameter is required.
     *
     * @var IPAclConfig
     */
    public $IPAclConfig;

    /**
     * @description The bastion host ID.
     *
     * > You can call the DescribeInstances operation to query the bastion host ID.[](~~153281~~)
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the control policy that you want to modify.
     *
     * >  You can call the [ListPolicies](https://help.aliyun.com/document_detail/2758876.html) operation to query the control policy ID.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'IPAclConfig' => 'IPAclConfig',
        'instanceId' => 'InstanceId',
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPAclConfig) {
            $res['IPAclConfig'] = null !== $this->IPAclConfig ? $this->IPAclConfig->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPolicyIPAclConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPAclConfig'])) {
            $model->IPAclConfig = IPAclConfig::fromMap($map['IPAclConfig']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
