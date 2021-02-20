<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQPSListResponseBody;

use AlibabaCloud\Tea\Model;

class domainQPSList extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $maxAttackQps;

    /**
     * @var int
     */
    public $attackQps;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var int
     */
    public $maxNormalQps;

    /**
     * @var int
     */
    public $totalQps;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $cacheHits;
    protected $_name = [
        'index'        => 'Index',
        'time'         => 'Time',
        'maxAttackQps' => 'MaxAttackQps',
        'attackQps'    => 'AttackQps',
        'maxQps'       => 'MaxQps',
        'maxNormalQps' => 'MaxNormalQps',
        'totalQps'     => 'TotalQps',
        'totalCount'   => 'TotalCount',
        'cacheHits'    => 'CacheHits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->maxAttackQps) {
            $res['MaxAttackQps'] = $this->maxAttackQps;
        }
        if (null !== $this->attackQps) {
            $res['AttackQps'] = $this->attackQps;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->maxNormalQps) {
            $res['MaxNormalQps'] = $this->maxNormalQps;
        }
        if (null !== $this->totalQps) {
            $res['TotalQps'] = $this->totalQps;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->cacheHits) {
            $res['CacheHits'] = $this->cacheHits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainQPSList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['MaxAttackQps'])) {
            $model->maxAttackQps = $map['MaxAttackQps'];
        }
        if (isset($map['AttackQps'])) {
            $model->attackQps = $map['AttackQps'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['MaxNormalQps'])) {
            $model->maxNormalQps = $map['MaxNormalQps'];
        }
        if (isset($map['TotalQps'])) {
            $model->totalQps = $map['TotalQps'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['CacheHits'])) {
            $model->cacheHits = $map['CacheHits'];
        }

        return $model;
    }
}
