<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $zeroHitRate;

    /**
     * @var float
     */
    public $ctr;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $ipvUv;

    /**
     * @var int
     */
    public $ipv;

    /**
     * @var int
     */
    public $uv;

    /**
     * @var int
     */
    public $pv;
    protected $_name = [
        'zeroHitRate'    => 'zeroHitRate',
        'ctr'            => 'ctr',
        'experimentName' => 'experimentName',
        'date'           => 'date',
        'ipvUv'          => 'ipvUv',
        'ipv'            => 'ipv',
        'uv'             => 'uv',
        'pv'             => 'pv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zeroHitRate) {
            $res['zeroHitRate'] = $this->zeroHitRate;
        }
        if (null !== $this->ctr) {
            $res['ctr'] = $this->ctr;
        }
        if (null !== $this->experimentName) {
            $res['experimentName'] = $this->experimentName;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->ipvUv) {
            $res['ipvUv'] = $this->ipvUv;
        }
        if (null !== $this->ipv) {
            $res['ipv'] = $this->ipv;
        }
        if (null !== $this->uv) {
            $res['uv'] = $this->uv;
        }
        if (null !== $this->pv) {
            $res['pv'] = $this->pv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['zeroHitRate'])) {
            $model->zeroHitRate = $map['zeroHitRate'];
        }
        if (isset($map['ctr'])) {
            $model->ctr = $map['ctr'];
        }
        if (isset($map['experimentName'])) {
            $model->experimentName = $map['experimentName'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['ipvUv'])) {
            $model->ipvUv = $map['ipvUv'];
        }
        if (isset($map['ipv'])) {
            $model->ipv = $map['ipv'];
        }
        if (isset($map['uv'])) {
            $model->uv = $map['uv'];
        }
        if (isset($map['pv'])) {
            $model->pv = $map['pv'];
        }

        return $model;
    }
}
