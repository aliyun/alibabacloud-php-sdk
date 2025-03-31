<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

class ListPolicyGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var policyGroupModel[]
     */
    public $policyGroupModel;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken' => 'NextToken',
        'policyGroupModel' => 'PolicyGroupModel',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupModel)) {
            Model::validateArray($this->policyGroupModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyGroupModel) {
            if (\is_array($this->policyGroupModel)) {
                $res['PolicyGroupModel'] = [];
                $n1 = 0;
                foreach ($this->policyGroupModel as $item1) {
                    $res['PolicyGroupModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyGroupModel'])) {
            if (!empty($map['PolicyGroupModel'])) {
                $model->policyGroupModel = [];
                $n1 = 0;
                foreach ($map['PolicyGroupModel'] as $item1) {
                    $model->policyGroupModel[$n1++] = policyGroupModel::fromMap($item1);
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
