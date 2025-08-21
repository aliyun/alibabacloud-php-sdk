<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody\result\alarmGroupTotal;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody\result\channelTotal;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody\result\levelTotal;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody\result\receiverTotal;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody\result\statistics;

class result extends Model
{
    /**
     * @var string
     */
    public $alarmGroup;

    /**
     * @var alarmGroupTotal[]
     */
    public $alarmGroupTotal;

    /**
     * @var channelTotal[]
     */
    public $channelTotal;

    /**
     * @var int
     */
    public $count;

    /**
     * @var levelTotal[]
     */
    public $levelTotal;

    /**
     * @var receiverTotal[]
     */
    public $receiverTotal;

    /**
     * @var statistics[]
     */
    public $statistics;
    protected $_name = [
        'alarmGroup' => 'alarmGroup',
        'alarmGroupTotal' => 'alarmGroupTotal',
        'channelTotal' => 'channelTotal',
        'count' => 'count',
        'levelTotal' => 'levelTotal',
        'receiverTotal' => 'receiverTotal',
        'statistics' => 'statistics',
    ];

    public function validate()
    {
        if (\is_array($this->alarmGroupTotal)) {
            Model::validateArray($this->alarmGroupTotal);
        }
        if (\is_array($this->channelTotal)) {
            Model::validateArray($this->channelTotal);
        }
        if (\is_array($this->levelTotal)) {
            Model::validateArray($this->levelTotal);
        }
        if (\is_array($this->receiverTotal)) {
            Model::validateArray($this->receiverTotal);
        }
        if (\is_array($this->statistics)) {
            Model::validateArray($this->statistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmGroup) {
            $res['alarmGroup'] = $this->alarmGroup;
        }

        if (null !== $this->alarmGroupTotal) {
            if (\is_array($this->alarmGroupTotal)) {
                $res['alarmGroupTotal'] = [];
                $n1 = 0;
                foreach ($this->alarmGroupTotal as $item1) {
                    $res['alarmGroupTotal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelTotal) {
            if (\is_array($this->channelTotal)) {
                $res['channelTotal'] = [];
                $n1 = 0;
                foreach ($this->channelTotal as $item1) {
                    $res['channelTotal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->levelTotal) {
            if (\is_array($this->levelTotal)) {
                $res['levelTotal'] = [];
                $n1 = 0;
                foreach ($this->levelTotal as $item1) {
                    $res['levelTotal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receiverTotal) {
            if (\is_array($this->receiverTotal)) {
                $res['receiverTotal'] = [];
                $n1 = 0;
                foreach ($this->receiverTotal as $item1) {
                    $res['receiverTotal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statistics) {
            if (\is_array($this->statistics)) {
                $res['statistics'] = [];
                $n1 = 0;
                foreach ($this->statistics as $item1) {
                    $res['statistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['alarmGroup'])) {
            $model->alarmGroup = $map['alarmGroup'];
        }

        if (isset($map['alarmGroupTotal'])) {
            if (!empty($map['alarmGroupTotal'])) {
                $model->alarmGroupTotal = [];
                $n1 = 0;
                foreach ($map['alarmGroupTotal'] as $item1) {
                    $model->alarmGroupTotal[$n1] = alarmGroupTotal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['channelTotal'])) {
            if (!empty($map['channelTotal'])) {
                $model->channelTotal = [];
                $n1 = 0;
                foreach ($map['channelTotal'] as $item1) {
                    $model->channelTotal[$n1] = channelTotal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['levelTotal'])) {
            if (!empty($map['levelTotal'])) {
                $model->levelTotal = [];
                $n1 = 0;
                foreach ($map['levelTotal'] as $item1) {
                    $model->levelTotal[$n1] = levelTotal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['receiverTotal'])) {
            if (!empty($map['receiverTotal'])) {
                $model->receiverTotal = [];
                $n1 = 0;
                foreach ($map['receiverTotal'] as $item1) {
                    $model->receiverTotal[$n1] = receiverTotal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['statistics'])) {
            if (!empty($map['statistics'])) {
                $model->statistics = [];
                $n1 = 0;
                foreach ($map['statistics'] as $item1) {
                    $model->statistics[$n1] = statistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
