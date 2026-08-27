<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayAuthorizedSecurityGroupRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string[]
     */
    public $authCidrs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $securityGroupRuleId;

    /**
     * @var string
     */
    public $sourceSecurityGroupId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authCidrs' => 'authCidrs',
        'description' => 'description',
        'ipProtocol' => 'ipProtocol',
        'portRange' => 'portRange',
        'securityGroupId' => 'securityGroupId',
        'securityGroupName' => 'securityGroupName',
        'securityGroupRuleId' => 'securityGroupRuleId',
        'sourceSecurityGroupId' => 'sourceSecurityGroupId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        if (\is_array($this->authCidrs)) {
            Model::validateArray($this->authCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCidrs) {
            if (\is_array($this->authCidrs)) {
                $res['authCidrs'] = [];
                $n1 = 0;
                foreach ($this->authCidrs as $item1) {
                    $res['authCidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->ipProtocol) {
            $res['ipProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->portRange) {
            $res['portRange'] = $this->portRange;
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupName) {
            $res['securityGroupName'] = $this->securityGroupName;
        }

        if (null !== $this->securityGroupRuleId) {
            $res['securityGroupRuleId'] = $this->securityGroupRuleId;
        }

        if (null !== $this->sourceSecurityGroupId) {
            $res['sourceSecurityGroupId'] = $this->sourceSecurityGroupId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['authCidrs'])) {
            if (!empty($map['authCidrs'])) {
                $model->authCidrs = [];
                $n1 = 0;
                foreach ($map['authCidrs'] as $item1) {
                    $model->authCidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['ipProtocol'])) {
            $model->ipProtocol = $map['ipProtocol'];
        }

        if (isset($map['portRange'])) {
            $model->portRange = $map['portRange'];
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['securityGroupName'])) {
            $model->securityGroupName = $map['securityGroupName'];
        }

        if (isset($map['securityGroupRuleId'])) {
            $model->securityGroupRuleId = $map['securityGroupRuleId'];
        }

        if (isset($map['sourceSecurityGroupId'])) {
            $model->sourceSecurityGroupId = $map['sourceSecurityGroupId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
