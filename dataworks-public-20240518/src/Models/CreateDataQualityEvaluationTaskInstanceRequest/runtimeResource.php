<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskInstanceRequest;

use AlibabaCloud\Tea\Model;

class runtimeResource extends Model
{
    /**
     * @description The task runs to configure CU consumption. If Serverless resource groups are used, you must specify this parameter.
     *
     * @example 0.25
     *
     * @var float
     */
    public $cu;

    /**
     * @description The identifier of the scheduling resource group configured for running the task.
     *
     * @example 63900680
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cu' => 'Cu',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
