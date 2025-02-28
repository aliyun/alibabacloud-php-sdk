<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class JobStatusRunning extends Model
{
    /**
     * @var int
     */
    public $observedFlinkJobRestarts;
    /**
     * @var string
     */
    public $observedFlinkJobStatus;
    protected $_name = [
        'observedFlinkJobRestarts' => 'observedFlinkJobRestarts',
        'observedFlinkJobStatus'   => 'observedFlinkJobStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->observedFlinkJobRestarts) {
            $res['observedFlinkJobRestarts'] = $this->observedFlinkJobRestarts;
        }

        if (null !== $this->observedFlinkJobStatus) {
            $res['observedFlinkJobStatus'] = $this->observedFlinkJobStatus;
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
        if (isset($map['observedFlinkJobRestarts'])) {
            $model->observedFlinkJobRestarts = $map['observedFlinkJobRestarts'];
        }

        if (isset($map['observedFlinkJobStatus'])) {
            $model->observedFlinkJobStatus = $map['observedFlinkJobStatus'];
        }

        return $model;
    }
}
