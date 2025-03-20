<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponseBody\quotas;
use AlibabaCloud\Tea\Model;

class ListInstanceQuotasWithUsageResponseBody extends Model
{
    /**
     * @description The plan ID.[](~~2850189~~)
     *
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The quotas and their actual usage in the plan.
     *
     * @var quotas[]
     */
    public $quotas;

    /**
     * @description The request ID.
     *
     * @example 85H66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The plan status. Valid values:
     *
     *   online: The plan is in service.
     *   offline: The plan has expired within an allowable period. In this state, the plan is unavailable.
     *   disable: The plan is released.
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'quotas' => 'Quotas',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->quotas) {
            $res['Quotas'] = [];
            if (null !== $this->quotas && \is_array($this->quotas)) {
                $n = 0;
                foreach ($this->quotas as $item) {
                    $res['Quotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceQuotasWithUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n = 0;
                foreach ($map['Quotas'] as $item) {
                    $model->quotas[$n++] = null !== $item ? quotas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
