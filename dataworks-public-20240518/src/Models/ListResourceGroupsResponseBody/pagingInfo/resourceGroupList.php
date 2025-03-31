<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo\resourceGroupList\aliyunResourceTags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo\resourceGroupList\spec;

class resourceGroupList extends Model
{
    /**
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $defaultVpcId;

    /**
     * @var string
     */
    public $defaultVswicthId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupType;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags' => 'AliyunResourceTags',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'defaultVpcId' => 'DefaultVpcId',
        'defaultVswicthId' => 'DefaultVswicthId',
        'id' => 'Id',
        'name' => 'Name',
        'orderInstanceId' => 'OrderInstanceId',
        'paymentType' => 'PaymentType',
        'remark' => 'Remark',
        'resourceGroupType' => 'ResourceGroupType',
        'spec' => 'Spec',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunResourceTags)) {
            Model::validateArray($this->aliyunResourceTags);
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }

        if (null !== $this->aliyunResourceTags) {
            if (\is_array($this->aliyunResourceTags)) {
                $res['AliyunResourceTags'] = [];
                $n1 = 0;
                foreach ($this->aliyunResourceTags as $item1) {
                    $res['AliyunResourceTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->defaultVpcId) {
            $res['DefaultVpcId'] = $this->defaultVpcId;
        }

        if (null !== $this->defaultVswicthId) {
            $res['DefaultVswicthId'] = $this->defaultVswicthId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }

        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }

        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n1 = 0;
                foreach ($map['AliyunResourceTags'] as $item1) {
                    $model->aliyunResourceTags[$n1++] = aliyunResourceTags::fromMap($item1);
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DefaultVpcId'])) {
            $model->defaultVpcId = $map['DefaultVpcId'];
        }

        if (isset($map['DefaultVswicthId'])) {
            $model->defaultVswicthId = $map['DefaultVswicthId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }

        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
