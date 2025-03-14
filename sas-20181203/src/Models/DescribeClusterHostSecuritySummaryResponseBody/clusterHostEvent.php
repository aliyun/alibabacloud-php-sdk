<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent\alarmEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent\baselineEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent\vulEvent;
use AlibabaCloud\Tea\Model;

class clusterHostEvent extends Model
{
    /**
     * @description The alert details of the host.
     *
     * @var alarmEvent[]
     */
    public $alarmEvent;

    /**
     * @description The baseline details of the host.
     *
     * @var baselineEvent[]
     */
    public $baselineEvent;

    /**
     * @description The vulnerability details of the host.
     *
     * @var vulEvent[]
     */
    public $vulEvent;
    protected $_name = [
        'alarmEvent' => 'AlarmEvent',
        'baselineEvent' => 'BaselineEvent',
        'vulEvent' => 'VulEvent',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEvent) {
            $res['AlarmEvent'] = [];
            if (null !== $this->alarmEvent && \is_array($this->alarmEvent)) {
                $n = 0;
                foreach ($this->alarmEvent as $item) {
                    $res['AlarmEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->baselineEvent) {
            $res['BaselineEvent'] = [];
            if (null !== $this->baselineEvent && \is_array($this->baselineEvent)) {
                $n = 0;
                foreach ($this->baselineEvent as $item) {
                    $res['BaselineEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vulEvent) {
            $res['VulEvent'] = [];
            if (null !== $this->vulEvent && \is_array($this->vulEvent)) {
                $n = 0;
                foreach ($this->vulEvent as $item) {
                    $res['VulEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterHostEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEvent'])) {
            if (!empty($map['AlarmEvent'])) {
                $model->alarmEvent = [];
                $n = 0;
                foreach ($map['AlarmEvent'] as $item) {
                    $model->alarmEvent[$n++] = null !== $item ? alarmEvent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BaselineEvent'])) {
            if (!empty($map['BaselineEvent'])) {
                $model->baselineEvent = [];
                $n = 0;
                foreach ($map['BaselineEvent'] as $item) {
                    $model->baselineEvent[$n++] = null !== $item ? baselineEvent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VulEvent'])) {
            if (!empty($map['VulEvent'])) {
                $model->vulEvent = [];
                $n = 0;
                foreach ($map['VulEvent'] as $item) {
                    $model->vulEvent[$n++] = null !== $item ? vulEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
