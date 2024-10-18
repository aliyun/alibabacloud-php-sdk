<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @example Resource
     *
     * @var string
     */
    public $name;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $resourceGroupTypes;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'name'               => 'Name',
        'paymentType'        => 'PaymentType',
        'projectId'          => 'ProjectId',
        'resourceGroupTypes' => 'ResourceGroupTypes',
        'statuses'           => 'Statuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceGroupTypes) {
            $res['ResourceGroupTypes'] = $this->resourceGroupTypes;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceGroupTypes'])) {
            if (!empty($map['ResourceGroupTypes'])) {
                $model->resourceGroupTypes = $map['ResourceGroupTypes'];
            }
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }

        return $model;
    }
}
