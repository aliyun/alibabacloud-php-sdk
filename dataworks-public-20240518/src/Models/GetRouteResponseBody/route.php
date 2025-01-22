<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetRouteResponseBody;

use AlibabaCloud\Dara\Model;

class route extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $destinationCidr;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $networkId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'destinationCidr' => 'DestinationCidr',
        'id'              => 'Id',
        'networkId'       => 'NetworkId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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

        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
