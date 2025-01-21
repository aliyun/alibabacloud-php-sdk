<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewResponseBody\data\failedInstances;

class data extends Model
{
    /**
     * @var failedInstances[]
     */
    public $failedInstances;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'failedInstances' => 'FailedInstances',
        'success'         => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->failedInstances)) {
            Model::validateArray($this->failedInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedInstances) {
            if (\is_array($this->failedInstances)) {
                $res['FailedInstances'] = [];
                $n1                     = 0;
                foreach ($this->failedInstances as $item1) {
                    $res['FailedInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['FailedInstances'])) {
            if (!empty($map['FailedInstances'])) {
                $model->failedInstances = [];
                $n1                     = 0;
                foreach ($map['FailedInstances'] as $item1) {
                    $model->failedInstances[$n1++] = failedInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
