<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models;

use AlibabaCloud\Tea\Model;

class ListChannelRiskDetailsRequest extends Model
{
    /**
     * @example 360market
     *
     * @var string
     */
    public $channel;

    /**
     * @description This parameter is required.
     *
     * @example 59892ebcaed179694b000104
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description This parameter is required.
     *
     * @example 20230418
     *
     * @var string
     */
    public $end;

    /**
     * @example 1
     *
     * @var string
     */
    public $isAllChannel;

    /**
     * @description This parameter is required.
     *
     * @example 20230418
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'channel'      => 'channel',
        'dataSourceId' => 'dataSourceId',
        'end'          => 'end',
        'isAllChannel' => 'isAllChannel',
        'start'        => 'start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->isAllChannel) {
            $res['isAllChannel'] = $this->isAllChannel;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChannelRiskDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['isAllChannel'])) {
            $model->isAllChannel = $map['isAllChannel'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
