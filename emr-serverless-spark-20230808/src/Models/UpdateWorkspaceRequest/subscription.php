<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateWorkspaceRequest;

use AlibabaCloud\Dara\Model;

class subscription extends Model
{
    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $autoRenewPeriodUnit;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string[]
     */
    public $queue;
    protected $_name = [
        'autoRenew' => 'autoRenew',
        'autoRenewPeriod' => 'autoRenewPeriod',
        'autoRenewPeriodUnit' => 'autoRenewPeriodUnit',
        'clientToken' => 'clientToken',
        'duration' => 'duration',
        'paymentDurationUnit' => 'paymentDurationUnit',
        'queue' => 'queue',
    ];

    public function validate()
    {
        if (\is_array($this->queue)) {
            Model::validateArray($this->queue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['autoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->autoRenewPeriodUnit) {
            $res['autoRenewPeriodUnit'] = $this->autoRenewPeriodUnit;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->paymentDurationUnit) {
            $res['paymentDurationUnit'] = $this->paymentDurationUnit;
        }

        if (null !== $this->queue) {
            if (\is_array($this->queue)) {
                $res['queue'] = [];
                $n1 = 0;
                foreach ($this->queue as $item1) {
                    $res['queue'][$n1] = $item1;
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
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }

        if (isset($map['autoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['autoRenewPeriod'];
        }

        if (isset($map['autoRenewPeriodUnit'])) {
            $model->autoRenewPeriodUnit = $map['autoRenewPeriodUnit'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['paymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['paymentDurationUnit'];
        }

        if (isset($map['queue'])) {
            if (!empty($map['queue'])) {
                $model->queue = [];
                $n1 = 0;
                foreach ($map['queue'] as $item1) {
                    $model->queue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
