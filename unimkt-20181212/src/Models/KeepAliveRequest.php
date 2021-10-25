<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class KeepAliveRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var int
     */
    public $networkType;

    /**
     * @var string
     */
    public $tac;

    /**
     * @var string
     */
    public $cellId;
    protected $_name = [
        'channelId'   => 'ChannelId',
        'deviceSn'    => 'DeviceSn',
        'networkType' => 'NetworkType',
        'tac'         => 'Tac',
        'cellId'      => 'CellId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->tac) {
            $res['Tac'] = $this->tac;
        }
        if (null !== $this->cellId) {
            $res['CellId'] = $this->cellId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KeepAliveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Tac'])) {
            $model->tac = $map['Tac'];
        }
        if (isset($map['CellId'])) {
            $model->cellId = $map['CellId'];
        }

        return $model;
    }
}
