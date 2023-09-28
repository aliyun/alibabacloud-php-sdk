<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversResponseBody\approvers;
use AlibabaCloud\Tea\Model;

class ListProvisionedProductPlanApproversResponseBody extends Model
{
    /**
     * @description An array that consists of reviewers.
     *
     * @var approvers[]
     */
    public $approvers;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approvers' => 'Approvers',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvers) {
            $res['Approvers'] = [];
            if (null !== $this->approvers && \is_array($this->approvers)) {
                $n = 0;
                foreach ($this->approvers as $item) {
                    $res['Approvers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProvisionedProductPlanApproversResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Approvers'])) {
            if (!empty($map['Approvers'])) {
                $model->approvers = [];
                $n                = 0;
                foreach ($map['Approvers'] as $item) {
                    $model->approvers[$n++] = null !== $item ? approvers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
