<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\brokerInfo\operations;
use AlibabaCloud\Tea\Model;

class brokerInfo extends Model
{
    /**
     * @description Delay status.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $delayStatus;

    /**
     * @description Operation list.
     *
     * @var operations[]
     */
    public $operations;

    /**
     * @description Preset delivery time.
     *
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $presetDelayTime;
    protected $_name = [
        'delayStatus'     => 'delayStatus',
        'operations'      => 'operations',
        'presetDelayTime' => 'presetDelayTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayStatus) {
            $res['delayStatus'] = $this->delayStatus;
        }
        if (null !== $this->operations) {
            $res['operations'] = [];
            if (null !== $this->operations && \is_array($this->operations)) {
                $n = 0;
                foreach ($this->operations as $item) {
                    $res['operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->presetDelayTime) {
            $res['presetDelayTime'] = $this->presetDelayTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return brokerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['delayStatus'])) {
            $model->delayStatus = $map['delayStatus'];
        }
        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n                 = 0;
                foreach ($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? operations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['presetDelayTime'])) {
            $model->presetDelayTime = $map['presetDelayTime'];
        }

        return $model;
    }
}
