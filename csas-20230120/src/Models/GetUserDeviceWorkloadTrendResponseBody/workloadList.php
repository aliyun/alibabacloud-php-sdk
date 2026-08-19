<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceWorkloadTrendResponseBody;

use AlibabaCloud\Dara\Model;

class workloadList extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $workload;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'workload' => 'Workload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->workload) {
            $res['Workload'] = $this->workload;
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Workload'])) {
            $model->workload = $map['Workload'];
        }

        return $model;
    }
}
