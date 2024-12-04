<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsShrinkRequest extends Model
{
    /**
     * @description The name of a resource group, which is used for fuzzy match.
     *
     * @example Resource
     *
     * @var string
     */
    public $name;

    /**
     * @description The billing method of resource groups. Valid values: PrePaid and PostPaid. The value PrePaid indicates the subscription billing method, and the value PostPaid indicates the pay-as-you-go billing method.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 1000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The types of resource groups to query. If you do not configure this parameter, only serverless resource groups are returned by default.
     *
     * @var string
     */
    public $resourceGroupTypesShrink;

    /**
     * @description The statuses of resource groups.
     *
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
