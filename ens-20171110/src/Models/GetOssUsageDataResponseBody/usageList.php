<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageList extends Model
{
    /**
     * @example 37865147
     *
     * @var int
     */
    public $lanRxBw;

    /**
     * @example 22012187890
     *
     * @var int
     */
    public $lanTxBw;

    /**
     * @example 144
     *
     * @var int
     */
    public $point;

    /**
     * @example 2022-01-12T00:00:00Z
     *
     * @var string
     */
    public $pointTs;

    /**
     * @example 85462146217
     *
     * @var int
     */
    public $storageUsageByte;

    /**
     * @example 542155715
     *
     * @var int
     */
    public $wanRxBw;

    /**
     * @example 547126175217
     *
     * @var int
     */
    public $wanTxBw;
    protected $_name = [
        'lanRxBw'          => 'LanRxBw',
        'lanTxBw'          => 'LanTxBw',
        'point'            => 'Point',
        'pointTs'          => 'PointTs',
        'storageUsageByte' => 'StorageUsageByte',
        'wanRxBw'          => 'WanRxBw',
        'wanTxBw'          => 'WanTxBw',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lanRxBw) {
            $res['LanRxBw'] = $this->lanRxBw;
        }
        if (null !== $this->lanTxBw) {
            $res['LanTxBw'] = $this->lanTxBw;
        }
        if (null !== $this->point) {
            $res['Point'] = $this->point;
        }
        if (null !== $this->pointTs) {
            $res['PointTs'] = $this->pointTs;
        }
        if (null !== $this->storageUsageByte) {
            $res['StorageUsageByte'] = $this->storageUsageByte;
        }
        if (null !== $this->wanRxBw) {
            $res['WanRxBw'] = $this->wanRxBw;
        }
        if (null !== $this->wanTxBw) {
            $res['WanTxBw'] = $this->wanTxBw;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LanRxBw'])) {
            $model->lanRxBw = $map['LanRxBw'];
        }
        if (isset($map['LanTxBw'])) {
            $model->lanTxBw = $map['LanTxBw'];
        }
        if (isset($map['Point'])) {
            $model->point = $map['Point'];
        }
        if (isset($map['PointTs'])) {
            $model->pointTs = $map['PointTs'];
        }
        if (isset($map['StorageUsageByte'])) {
            $model->storageUsageByte = $map['StorageUsageByte'];
        }
        if (isset($map['WanRxBw'])) {
            $model->wanRxBw = $map['WanRxBw'];
        }
        if (isset($map['WanTxBw'])) {
            $model->wanTxBw = $map['WanTxBw'];
        }

        return $model;
    }
}
