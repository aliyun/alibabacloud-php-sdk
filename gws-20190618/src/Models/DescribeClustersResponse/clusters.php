<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClustersResponse;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $natId;

    /**
     * @var string
     */
    public $natEip;

    /**
     * @var int
     */
    public $instanceCount;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'name'          => 'Name',
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
        'createTime'    => 'CreateTime',
        'securityGroup' => 'SecurityGroup',
        'domainName'    => 'DomainName',
        'natId'         => 'NatId',
        'natEip'        => 'NatEip',
        'instanceCount' => 'InstanceCount',
    ];

    public function validate()
    {
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('securityGroup', $this->securityGroup, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('natId', $this->natId, true);
        Model::validateRequired('natEip', $this->natEip, true);
        Model::validateRequired('instanceCount', $this->instanceCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->natId) {
            $res['NatId'] = $this->natId;
        }
        if (null !== $this->natEip) {
            $res['NatEip'] = $this->natEip;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NatId'])) {
            $model->natId = $map['NatId'];
        }
        if (isset($map['NatEip'])) {
            $model->natEip = $map['NatEip'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        return $model;
    }
}
