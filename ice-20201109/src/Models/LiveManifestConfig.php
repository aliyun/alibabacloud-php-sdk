<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class LiveManifestConfig extends Model
{
    /**
     * @var string
     */
    public $adMarkers;

    /**
     * @var int
     */
    public $dateTimeInterval;

    /**
     * @var int
     */
    public $maxVideoBitrate;

    /**
     * @var int
     */
    public $minBufferTime;

    /**
     * @var int
     */
    public $minUpdatePeriod;

    /**
     * @var int
     */
    public $minVideoBitrate;

    /**
     * @var int
     */
    public $segmentCount;

    /**
     * @var string
     */
    public $streamOrder;
    protected $_name = [
        'adMarkers' => 'AdMarkers',
        'dateTimeInterval' => 'DateTimeInterval',
        'maxVideoBitrate' => 'MaxVideoBitrate',
        'minBufferTime' => 'MinBufferTime',
        'minUpdatePeriod' => 'MinUpdatePeriod',
        'minVideoBitrate' => 'MinVideoBitrate',
        'segmentCount' => 'SegmentCount',
        'streamOrder' => 'StreamOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adMarkers) {
            $res['AdMarkers'] = $this->adMarkers;
        }

        if (null !== $this->dateTimeInterval) {
            $res['DateTimeInterval'] = $this->dateTimeInterval;
        }

        if (null !== $this->maxVideoBitrate) {
            $res['MaxVideoBitrate'] = $this->maxVideoBitrate;
        }

        if (null !== $this->minBufferTime) {
            $res['MinBufferTime'] = $this->minBufferTime;
        }

        if (null !== $this->minUpdatePeriod) {
            $res['MinUpdatePeriod'] = $this->minUpdatePeriod;
        }

        if (null !== $this->minVideoBitrate) {
            $res['MinVideoBitrate'] = $this->minVideoBitrate;
        }

        if (null !== $this->segmentCount) {
            $res['SegmentCount'] = $this->segmentCount;
        }

        if (null !== $this->streamOrder) {
            $res['StreamOrder'] = $this->streamOrder;
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
        if (isset($map['AdMarkers'])) {
            $model->adMarkers = $map['AdMarkers'];
        }

        if (isset($map['DateTimeInterval'])) {
            $model->dateTimeInterval = $map['DateTimeInterval'];
        }

        if (isset($map['MaxVideoBitrate'])) {
            $model->maxVideoBitrate = $map['MaxVideoBitrate'];
        }

        if (isset($map['MinBufferTime'])) {
            $model->minBufferTime = $map['MinBufferTime'];
        }

        if (isset($map['MinUpdatePeriod'])) {
            $model->minUpdatePeriod = $map['MinUpdatePeriod'];
        }

        if (isset($map['MinVideoBitrate'])) {
            $model->minVideoBitrate = $map['MinVideoBitrate'];
        }

        if (isset($map['SegmentCount'])) {
            $model->segmentCount = $map['SegmentCount'];
        }

        if (isset($map['StreamOrder'])) {
            $model->streamOrder = $map['StreamOrder'];
        }

        return $model;
    }
}
