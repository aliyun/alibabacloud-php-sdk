<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverEndpointRequest\ipConfig;

class AddResolverEndpointRequest extends Model
{
    /**
     * @var ipConfig[]
     */
    public $ipConfig;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'ipConfig' => 'IpConfig',
        'lang' => 'Lang',
        'name' => 'Name',
        'securityGroupId' => 'SecurityGroupId',
        'vpcId' => 'VpcId',
        'vpcRegionId' => 'VpcRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->ipConfig)) {
            Model::validateArray($this->ipConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipConfig) {
            if (\is_array($this->ipConfig)) {
                $res['IpConfig'] = [];
                $n1 = 0;
                foreach ($this->ipConfig as $item1) {
                    $res['IpConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
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
        if (isset($map['IpConfig'])) {
            if (!empty($map['IpConfig'])) {
                $model->ipConfig = [];
                $n1 = 0;
                foreach ($map['IpConfig'] as $item1) {
                    $model->ipConfig[$n1] = ipConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
