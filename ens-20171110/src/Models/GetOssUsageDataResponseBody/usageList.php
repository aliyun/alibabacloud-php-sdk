<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataResponseBody;

use AlibabaCloud\Dara\Model;

class usageList extends Model
{
    /**
     * @var int
     */
    public $lanRxBw;

    /**
     * @var int
     */
    public $lanTxBw;

    /**
     * @var int
     */
    public $point;

    /**
     * @var string
     */
    public $pointTs;

    /**
     * @var int
     */
    public $storageUsageByte;

    /**
     * @var int
     */
    public $wanRxBw;

    /**
     * @var int
     */
    public $wanTxBw;
    protected $_name = [
        'lanRxBw' => 'LanRxBw',
        'lanTxBw' => 'LanTxBw',
        'point' => 'Point',
        'pointTs' => 'PointTs',
        'storageUsageByte' => 'StorageUsageByte',
        'wanRxBw' => 'WanRxBw',
        'wanTxBw' => 'WanTxBw',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
