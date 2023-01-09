<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcSecurityGroupResponseBody;

use AlibabaCloud\Tea\Model;

class securityGroupList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example sg-bp16bt3zuugxpfjkasdfvthxth8
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example my-security-group
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @example vpc-uf6tar2ohlasdhsatjln37h30bv
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description'       => 'Description',
        'securityGroupId'   => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
