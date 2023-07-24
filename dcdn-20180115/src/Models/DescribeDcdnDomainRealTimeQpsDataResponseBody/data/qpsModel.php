<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeQpsDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class qpsModel extends Model
{
    /**
     * @description The number of queries per second (QPS).
     *
     * @example 1851.25
     *
     * @var float
     */
    public $qps;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard. The time is displayed in UTC.
     *
     * @example 2018-01-02T11:26:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'qps'       => 'Qps',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qpsModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
