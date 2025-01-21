<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateVirtualResourceRequest;

use AlibabaCloud\Dara\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $quotaId;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var float
     */
    public $spotPriceLimit;
    protected $_name = [
        'instanceType'   => 'InstanceType',
        'priority'       => 'Priority',
        'quotaId'        => 'QuotaId',
        'region'         => 'Region',
        'resourceId'     => 'ResourceId',
        'spotPriceLimit' => 'SpotPriceLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        return $model;
    }
}
