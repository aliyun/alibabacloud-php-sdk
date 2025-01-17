<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent\alarmEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent\baselineEvent;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent\vulEvent;

class clusterHostEvent extends Model
{
    /**
     * @var alarmEvent[]
     */
    public $alarmEvent;
    /**
     * @var baselineEvent[]
     */
    public $baselineEvent;
    /**
     * @var vulEvent[]
     */
    public $vulEvent;
    protected $_name = [
        'alarmEvent'    => 'AlarmEvent',
        'baselineEvent' => 'BaselineEvent',
        'vulEvent'      => 'VulEvent',
    ];

    public function validate()
    {
        if (\is_array($this->alarmEvent)) {
            Model::validateArray($this->alarmEvent);
        }
        if (\is_array($this->baselineEvent)) {
            Model::validateArray($this->baselineEvent);
        }
        if (\is_array($this->vulEvent)) {
            Model::validateArray($this->vulEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmEvent) {
            if (\is_array($this->alarmEvent)) {
                $res['AlarmEvent'] = [];
                $n1                = 0;
                foreach ($this->alarmEvent as $item1) {
                    $res['AlarmEvent'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->baselineEvent) {
            if (\is_array($this->baselineEvent)) {
                $res['BaselineEvent'] = [];
                $n1                   = 0;
                foreach ($this->baselineEvent as $item1) {
                    $res['BaselineEvent'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vulEvent) {
            if (\is_array($this->vulEvent)) {
                $res['VulEvent'] = [];
                $n1              = 0;
                foreach ($this->vulEvent as $item1) {
                    $res['VulEvent'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlarmEvent'])) {
            if (!empty($map['AlarmEvent'])) {
                $model->alarmEvent = [];
                $n1                = 0;
                foreach ($map['AlarmEvent'] as $item1) {
                    $model->alarmEvent[$n1++] = alarmEvent::fromMap($item1);
                }
            }
        }

        if (isset($map['BaselineEvent'])) {
            if (!empty($map['BaselineEvent'])) {
                $model->baselineEvent = [];
                $n1                   = 0;
                foreach ($map['BaselineEvent'] as $item1) {
                    $model->baselineEvent[$n1++] = baselineEvent::fromMap($item1);
                }
            }
        }

        if (isset($map['VulEvent'])) {
            if (!empty($map['VulEvent'])) {
                $model->vulEvent = [];
                $n1              = 0;
                foreach ($map['VulEvent'] as $item1) {
                    $model->vulEvent[$n1++] = vulEvent::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
