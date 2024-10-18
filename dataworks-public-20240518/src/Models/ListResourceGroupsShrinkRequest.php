<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsShrinkRequest extends Model
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
     * @var string
     */
    public $resourceGroupTypesShrink;

    /**
     * @var string
     */
    public $statusesShrink;
    protected $_name = [
        'name'                     => 'Name',
        'paymentType'              => 'PaymentType',
        'projectId'                => 'ProjectId',
        'resourceGroupTypesShrink' => 'ResourceGroupTypes',
        'statusesShrink'           => 'Statuses',
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
        if (null !== $this->resourceGroupTypesShrink) {
            $res['ResourceGroupTypes'] = $this->resourceGroupTypesShrink;
        }
        if (null !== $this->statusesShrink) {
            $res['Statuses'] = $this->statusesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsShrinkRequest
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
            $model->resourceGroupTypesShrink = $map['ResourceGroupTypes'];
        }
        if (isset($map['Statuses'])) {
            $model->statusesShrink = $map['Statuses'];
        }

        return $model;
    }
}
