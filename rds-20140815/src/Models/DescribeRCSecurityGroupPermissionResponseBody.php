<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCSecurityGroupPermissionResponseBody\securityGroupPermissions;

class DescribeRCSecurityGroupPermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $innerAccessPolicy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var securityGroupPermissions[]
     */
    public $securityGroupPermissions;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'innerAccessPolicy' => 'InnerAccessPolicy',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupPermissions' => 'SecurityGroupPermissions',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupPermissions)) {
            Model::validateArray($this->securityGroupPermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->innerAccessPolicy) {
            $res['InnerAccessPolicy'] = $this->innerAccessPolicy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupPermissions) {
            if (\is_array($this->securityGroupPermissions)) {
                $res['SecurityGroupPermissions'] = [];
                $n1 = 0;
                foreach ($this->securityGroupPermissions as $item1) {
                    $res['SecurityGroupPermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['InnerAccessPolicy'])) {
            $model->innerAccessPolicy = $map['InnerAccessPolicy'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupPermissions'])) {
            if (!empty($map['SecurityGroupPermissions'])) {
                $model->securityGroupPermissions = [];
                $n1 = 0;
                foreach ($map['SecurityGroupPermissions'] as $item1) {
                    $model->securityGroupPermissions[$n1] = securityGroupPermissions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
