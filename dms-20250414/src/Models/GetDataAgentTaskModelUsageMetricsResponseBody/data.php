<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetDataAgentTaskModelUsageMetricsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var float
     */
    public $concurrency;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $tpm;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'concurrency' => 'Concurrency',
        'endTime' => 'EndTime',
        'tpm' => 'Tpm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->tpm) {
            $res['Tpm'] = $this->tpm;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Tpm'])) {
            $model->tpm = $map['Tpm'];
        }

        return $model;
    }
}
