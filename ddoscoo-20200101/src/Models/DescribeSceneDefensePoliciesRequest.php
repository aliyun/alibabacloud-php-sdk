<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSceneDefensePoliciesRequest extends Model
{
    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management.
     *
     * If you do not configure this parameter, the instance belongs to the default resource group.
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: pending enabling
     *   **2**: enabled
     *   **3**: expired
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the template that is used to create the policy. Valid values:
     *
     *   **promotion**: the Important Activity template
     *   **bypass**: the Forward All template
     *
     * @example promotion
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'template'        => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSceneDefensePoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
