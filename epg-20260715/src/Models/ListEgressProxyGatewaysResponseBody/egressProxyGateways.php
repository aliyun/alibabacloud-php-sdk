<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyGatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyGatewaysResponseBody\egressProxyGateways\tags;

class egressProxyGateways extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultEgressProxyIpPoolId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $egressProxyConfigurationId;

    /**
     * @var string
     */
    public $egressProxyGatewayId;

    /**
     * @var string
     */
    public $egressProxyGatewayName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultEgressProxyIpPoolId' => 'DefaultEgressProxyIpPoolId',
        'description' => 'Description',
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
        'egressProxyGatewayId' => 'EgressProxyGatewayId',
        'egressProxyGatewayName' => 'EgressProxyGatewayName',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultEgressProxyIpPoolId) {
            $res['DefaultEgressProxyIpPoolId'] = $this->defaultEgressProxyIpPoolId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressProxyConfigurationId) {
            $res['EgressProxyConfigurationId'] = $this->egressProxyConfigurationId;
        }

        if (null !== $this->egressProxyGatewayId) {
            $res['EgressProxyGatewayId'] = $this->egressProxyGatewayId;
        }

        if (null !== $this->egressProxyGatewayName) {
            $res['EgressProxyGatewayName'] = $this->egressProxyGatewayName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultEgressProxyIpPoolId'])) {
            $model->defaultEgressProxyIpPoolId = $map['DefaultEgressProxyIpPoolId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressProxyConfigurationId'])) {
            $model->egressProxyConfigurationId = $map['EgressProxyConfigurationId'];
        }

        if (isset($map['EgressProxyGatewayId'])) {
            $model->egressProxyGatewayId = $map['EgressProxyGatewayId'];
        }

        if (isset($map['EgressProxyGatewayName'])) {
            $model->egressProxyGatewayName = $map['EgressProxyGatewayName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
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
