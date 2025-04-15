<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\brokerInfo\operations;

class brokerInfo extends Model
{
    /**
     * @var string
     */
    public $delayStatus;

    /**
     * @var operations[]
     */
    public $operations;

    /**
     * @var string
     */
    public $presetDelayTime;

    /**
     * @var string
     */
    public $recallResult;
    protected $_name = [
        'delayStatus' => 'delayStatus',
        'operations' => 'operations',
        'presetDelayTime' => 'presetDelayTime',
        'recallResult' => 'recallResult',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayStatus) {
            $res['delayStatus'] = $this->delayStatus;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['operations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->presetDelayTime) {
            $res['presetDelayTime'] = $this->presetDelayTime;
        }

        if (null !== $this->recallResult) {
            $res['recallResult'] = $this->recallResult;
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
        if (isset($map['delayStatus'])) {
            $model->delayStatus = $map['delayStatus'];
        }

        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['operations'] as $item1) {
                    $model->operations[$n1++] = operations::fromMap($item1);
                }
            }
        }

        if (isset($map['presetDelayTime'])) {
            $model->presetDelayTime = $map['presetDelayTime'];
        }

        if (isset($map['recallResult'])) {
            $model->recallResult = $map['recallResult'];
        }

        return $model;
    }
}
