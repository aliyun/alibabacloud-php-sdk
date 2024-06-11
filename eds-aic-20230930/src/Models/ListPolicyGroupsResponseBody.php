<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;
use AlibabaCloud\Tea\Model;

class ListPolicyGroupsResponseBody extends Model
{
    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var policyGroupModel[]
     */
    public $policyGroupModel;

    /**
     * @example 7B9EFA4F-4305-5968-BAEE-BD8B8DE5****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 31
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'policyGroupModel' => 'PolicyGroupModel',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyGroupModel) {
            $res['PolicyGroupModel'] = [];
            if (null !== $this->policyGroupModel && \is_array($this->policyGroupModel)) {
                $n = 0;
                foreach ($this->policyGroupModel as $item) {
                    $res['PolicyGroupModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PolicyGroupModel'])) {
            if (!empty($map['PolicyGroupModel'])) {
                $model->policyGroupModel = [];
                $n                       = 0;
                foreach ($map['PolicyGroupModel'] as $item) {
                    $model->policyGroupModel[$n++] = null !== $item ? policyGroupModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
