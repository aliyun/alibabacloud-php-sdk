<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches\subInstances;
use AlibabaCloud\Tea\Model;

class globalDistributeCaches extends Model
{
    /**
     * @description The state of the distributed instance. Valid values:
     *
     *   **Normal**: The instance is normal.
     *   **Changing**: The configurations of the instance are being changed.
     *   **Creating**: The instance is being created.
     *
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description The ID of the distributed instance.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the request.
     *
     * @var subInstances[]
     */
    public $subInstances;
    protected $_name = [
        'globalInstanceId' => 'GlobalInstanceId',
        'status'           => 'Status',
        'subInstances'     => 'SubInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subInstances) {
            $res['SubInstances'] = [];
            if (null !== $this->subInstances && \is_array($this->subInstances)) {
                $n = 0;
                foreach ($this->subInstances as $item) {
                    $res['SubInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalDistributeCaches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubInstances'])) {
            if (!empty($map['SubInstances'])) {
                $model->subInstances = [];
                $n                   = 0;
                foreach ($map['SubInstances'] as $item) {
                    $model->subInstances[$n++] = null !== $item ? subInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
