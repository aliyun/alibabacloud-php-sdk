<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data\sessions;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data\sourceStats;

class data extends Model
{
    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var sourceStats[]
     */
    public $sourceStats;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'sessions' => 'Sessions',
        'sourceStats' => 'SourceStats',
        'timestamp' => 'Timestamp',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        if (\is_array($this->sourceStats)) {
            Model::validateArray($this->sourceStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceStats) {
            if (\is_array($this->sourceStats)) {
                $res['SourceStats'] = [];
                $n1 = 0;
                foreach ($this->sourceStats as $item1) {
                    $res['SourceStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1] = sessions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceStats'])) {
            if (!empty($map['SourceStats'])) {
                $model->sourceStats = [];
                $n1 = 0;
                foreach ($map['SourceStats'] as $item1) {
                    $model->sourceStats[$n1] = sourceStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
