<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageList extends Model
{
    /**
     * @description The inbound bandwidth over the internal network. Unit: bit/s.
     *
     * @example 37865147
     *
     * @var int
     */
    public $lanRxBw;

    /**
     * @description The outbound bandwidth over the internal network. Unit: bit/s.
     *
     * @example 22012187890
     *
     * @var int
     */
    public $lanTxBw;

    /**
     * @description The number of time points within a day.
     *
     * @example 144
     *
     * @var int
     */
    public $point;

    /**
     * @description The point in time, in UTC. Format: 2010-01-21T09:50:23Z.
     *
     * @example 2022-01-12T00:00:00Z
     *
     * @var string
     */
    public $pointTs;

    /**
     * @description The storage usage. Unit: bytes.
     *
     * @example 85462146217
     *
     * @var int
     */
    public $storageUsageByte;

    /**
     * @description The outbound bandwidth over the Internet. Unit: bit/s.
     *
     * @example 542155715
     *
     * @var int
     */
    public $wanRxBw;

    /**
     * @description The outbound bandwidth over the Internet. Unit: bit/s.
     *
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
