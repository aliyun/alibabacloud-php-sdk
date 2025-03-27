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
     * @var string
     */
    public $manifestName;

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
    public $minVideoBitrate;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $segmentNum;

    /**
     * @var string
     */
    public $streamOrder;

    /**
     * @var bool
     */
    public $useAudioRenditionGroups;
    protected $_name = [
        'adMarkers' => 'AdMarkers',
        'dateTimeInterval' => 'DateTimeInterval',
        'manifestName' => 'ManifestName',
        'maxVideoBitrate' => 'MaxVideoBitrate',
        'minBufferTime' => 'MinBufferTime',
        'minVideoBitrate' => 'MinVideoBitrate',
        'protocol' => 'Protocol',
        'segmentNum' => 'SegmentNum',
        'streamOrder' => 'StreamOrder',
        'useAudioRenditionGroups' => 'UseAudioRenditionGroups',
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

        if (null !== $this->manifestName) {
            $res['ManifestName'] = $this->manifestName;
        }

        if (null !== $this->maxVideoBitrate) {
            $res['MaxVideoBitrate'] = $this->maxVideoBitrate;
        }

        if (null !== $this->minBufferTime) {
            $res['MinBufferTime'] = $this->minBufferTime;
        }

        if (null !== $this->minVideoBitrate) {
            $res['MinVideoBitrate'] = $this->minVideoBitrate;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->segmentNum) {
            $res['SegmentNum'] = $this->segmentNum;
        }

        if (null !== $this->streamOrder) {
            $res['StreamOrder'] = $this->streamOrder;
        }

        if (null !== $this->useAudioRenditionGroups) {
            $res['UseAudioRenditionGroups'] = $this->useAudioRenditionGroups;
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

        if (isset($map['ManifestName'])) {
            $model->manifestName = $map['ManifestName'];
        }

        if (isset($map['MaxVideoBitrate'])) {
            $model->maxVideoBitrate = $map['MaxVideoBitrate'];
        }

        if (isset($map['MinBufferTime'])) {
            $model->minBufferTime = $map['MinBufferTime'];
        }

        if (isset($map['MinVideoBitrate'])) {
            $model->minVideoBitrate = $map['MinVideoBitrate'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['SegmentNum'])) {
            $model->segmentNum = $map['SegmentNum'];
        }

        if (isset($map['StreamOrder'])) {
            $model->streamOrder = $map['StreamOrder'];
        }

        if (isset($map['UseAudioRenditionGroups'])) {
            $model->useAudioRenditionGroups = $map['UseAudioRenditionGroups'];
        }

        return $model;
    }
}
