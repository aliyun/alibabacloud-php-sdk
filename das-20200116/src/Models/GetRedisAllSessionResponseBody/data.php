<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data\sessions;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data\sourceStats;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the sessions.
     *
     * @var sessions[]
     */
    public $sessions;

    /**
     * @description The statistics on the access source.
     *
     * @var sourceStats[]
     */
    public $sourceStats;

    /**
     * @description The time when the instance sessions were returned. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660100753556
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The total number of sessions.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'sessions'    => 'Sessions',
        'sourceStats' => 'SourceStats',
        'timestamp'   => 'Timestamp',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceStats) {
            $res['SourceStats'] = [];
            if (null !== $this->sourceStats && \is_array($this->sourceStats)) {
                $n = 0;
                foreach ($this->sourceStats as $item) {
                    $res['SourceStats'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceStats'])) {
            if (!empty($map['SourceStats'])) {
                $model->sourceStats = [];
                $n                  = 0;
                foreach ($map['SourceStats'] as $item) {
                    $model->sourceStats[$n++] = null !== $item ? sourceStats::fromMap($item) : $item;
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
