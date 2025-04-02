<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

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
    protected $_name = [
        'authCidrs' => 'AuthCidrs',
        'description' => 'Description',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'ipProtocol' => 'IpProtocol',
        'portRange' => 'PortRange',
        'securityGroupId' => 'SecurityGroupId',
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
                $res['AuthCidrs'] = [];
                $n1 = 0;
                foreach ($this->authCidrs as $item1) {
                    $res['AuthCidrs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (isset($map['AuthCidrs'])) {
            if (!empty($map['AuthCidrs'])) {
                $model->authCidrs = [];
                $n1 = 0;
                foreach ($map['AuthCidrs'] as $item1) {
                    $model->authCidrs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
