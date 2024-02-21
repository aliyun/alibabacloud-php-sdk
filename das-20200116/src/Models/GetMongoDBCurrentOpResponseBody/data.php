<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data\sessionList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data\sessionStat;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The sessions.
     *
     * @var sessionList[]
     */
    public $sessionList;

    /**
     * @description The statistics on the sessions.
     *
     * @var sessionStat
     */
    public $sessionStat;

    /**
     * @description The time when the database sessions were returned. The value is in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1692029584428
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'sessionList' => 'SessionList',
        'sessionStat' => 'SessionStat',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionList) {
            $res['SessionList'] = [];
            if (null !== $this->sessionList && \is_array($this->sessionList)) {
                $n = 0;
                foreach ($this->sessionList as $item) {
                    $res['SessionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionStat) {
            $res['SessionStat'] = null !== $this->sessionStat ? $this->sessionStat->toMap() : null;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['SessionList'])) {
            if (!empty($map['SessionList'])) {
                $model->sessionList = [];
                $n                  = 0;
                foreach ($map['SessionList'] as $item) {
                    $model->sessionList[$n++] = null !== $item ? sessionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SessionStat'])) {
            $model->sessionStat = sessionStat::fromMap($map['SessionStat']);
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
