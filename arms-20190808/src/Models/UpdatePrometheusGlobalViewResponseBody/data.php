<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewResponseBody\data\failedInstances;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Prometheus instances or data sources that failed to be updated.
     *
     * @var failedInstances[]
     */
    public $failedInstances;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'failedInstances' => 'FailedInstances',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedInstances) {
            $res['FailedInstances'] = [];
            if (null !== $this->failedInstances && \is_array($this->failedInstances)) {
                $n = 0;
                foreach ($this->failedInstances as $item) {
                    $res['FailedInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedInstances'])) {
            if (!empty($map['FailedInstances'])) {
                $model->failedInstances = [];
                $n                      = 0;
                foreach ($map['FailedInstances'] as $item) {
                    $model->failedInstances[$n++] = null !== $item ? failedInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
