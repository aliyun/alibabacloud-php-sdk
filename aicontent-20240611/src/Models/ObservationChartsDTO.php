<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ObservationChartsDTO extends Model
{
    /**
     * @var TimeSeriesPointDTO[]
     */
    public $callVolume;

    /**
     * @var TimeSeriesPointDTO[]
     */
    public $concurrency;

    /**
     * @var TimeSeriesPointDTO[]
     */
    public $qpm;

    /**
     * @var TimeSeriesPointDTO[]
     */
    public $responseTime;

    /**
     * @var TimeSeriesPointDTO[]
     */
    public $successRate;

    /**
     * @var TimeSeriesPointDTO[]
     */
    public $tpm;
    protected $_name = [
        'callVolume' => 'callVolume',
        'concurrency' => 'concurrency',
        'qpm' => 'qpm',
        'responseTime' => 'responseTime',
        'successRate' => 'successRate',
        'tpm' => 'tpm',
    ];

    public function validate()
    {
        if (\is_array($this->callVolume)) {
            Model::validateArray($this->callVolume);
        }
        if (\is_array($this->concurrency)) {
            Model::validateArray($this->concurrency);
        }
        if (\is_array($this->qpm)) {
            Model::validateArray($this->qpm);
        }
        if (\is_array($this->responseTime)) {
            Model::validateArray($this->responseTime);
        }
        if (\is_array($this->successRate)) {
            Model::validateArray($this->successRate);
        }
        if (\is_array($this->tpm)) {
            Model::validateArray($this->tpm);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callVolume) {
            if (\is_array($this->callVolume)) {
                $res['callVolume'] = [];
                $n1 = 0;
                foreach ($this->callVolume as $item1) {
                    $res['callVolume'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->concurrency) {
            if (\is_array($this->concurrency)) {
                $res['concurrency'] = [];
                $n1 = 0;
                foreach ($this->concurrency as $item1) {
                    $res['concurrency'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qpm) {
            if (\is_array($this->qpm)) {
                $res['qpm'] = [];
                $n1 = 0;
                foreach ($this->qpm as $item1) {
                    $res['qpm'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseTime) {
            if (\is_array($this->responseTime)) {
                $res['responseTime'] = [];
                $n1 = 0;
                foreach ($this->responseTime as $item1) {
                    $res['responseTime'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successRate) {
            if (\is_array($this->successRate)) {
                $res['successRate'] = [];
                $n1 = 0;
                foreach ($this->successRate as $item1) {
                    $res['successRate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tpm) {
            if (\is_array($this->tpm)) {
                $res['tpm'] = [];
                $n1 = 0;
                foreach ($this->tpm as $item1) {
                    $res['tpm'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['callVolume'])) {
            if (!empty($map['callVolume'])) {
                $model->callVolume = [];
                $n1 = 0;
                foreach ($map['callVolume'] as $item1) {
                    $model->callVolume[$n1] = TimeSeriesPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['concurrency'])) {
            if (!empty($map['concurrency'])) {
                $model->concurrency = [];
                $n1 = 0;
                foreach ($map['concurrency'] as $item1) {
                    $model->concurrency[$n1] = TimeSeriesPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['qpm'])) {
            if (!empty($map['qpm'])) {
                $model->qpm = [];
                $n1 = 0;
                foreach ($map['qpm'] as $item1) {
                    $model->qpm[$n1] = TimeSeriesPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['responseTime'])) {
            if (!empty($map['responseTime'])) {
                $model->responseTime = [];
                $n1 = 0;
                foreach ($map['responseTime'] as $item1) {
                    $model->responseTime[$n1] = TimeSeriesPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['successRate'])) {
            if (!empty($map['successRate'])) {
                $model->successRate = [];
                $n1 = 0;
                foreach ($map['successRate'] as $item1) {
                    $model->successRate[$n1] = TimeSeriesPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tpm'])) {
            if (!empty($map['tpm'])) {
                $model->tpm = [];
                $n1 = 0;
                foreach ($map['tpm'] as $item1) {
                    $model->tpm[$n1] = TimeSeriesPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
