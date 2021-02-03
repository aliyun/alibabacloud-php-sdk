<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsResponse;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $v4HttpCount;

    /**
     * @var int
     */
    public $v4HttpsCount;

    /**
     * @var int
     */
    public $v6HttpCount;

    /**
     * @var int
     */
    public $v6HttpsCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'timestamp'    => 'Timestamp',
        'v4HttpCount'  => 'V4HttpCount',
        'v4HttpsCount' => 'V4HttpsCount',
        'v6HttpCount'  => 'V6HttpCount',
        'v6HttpsCount' => 'V6HttpsCount',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('v4HttpCount', $this->v4HttpCount, true);
        Model::validateRequired('v4HttpsCount', $this->v4HttpsCount, true);
        Model::validateRequired('v6HttpCount', $this->v6HttpCount, true);
        Model::validateRequired('v6HttpsCount', $this->v6HttpsCount, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->v4HttpCount) {
            $res['V4HttpCount'] = $this->v4HttpCount;
        }
        if (null !== $this->v4HttpsCount) {
            $res['V4HttpsCount'] = $this->v4HttpsCount;
        }
        if (null !== $this->v6HttpCount) {
            $res['V6HttpCount'] = $this->v6HttpCount;
        }
        if (null !== $this->v6HttpsCount) {
            $res['V6HttpsCount'] = $this->v6HttpsCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['V4HttpCount'])) {
            $model->v4HttpCount = $map['V4HttpCount'];
        }
        if (isset($map['V4HttpsCount'])) {
            $model->v4HttpsCount = $map['V4HttpsCount'];
        }
        if (isset($map['V6HttpCount'])) {
            $model->v6HttpCount = $map['V6HttpCount'];
        }
        if (isset($map['V6HttpsCount'])) {
            $model->v6HttpsCount = $map['V6HttpsCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
