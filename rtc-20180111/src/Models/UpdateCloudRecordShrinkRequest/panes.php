<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\texts;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\whiteboard;
use AlibabaCloud\Tea\Model;

class panes extends Model
{
    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @example 2
     *
     * @var int
     */
    public $paneCropMode;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $paneId;

    /**
     * @var bool
     */
    public $reservePaneForOfflineUser;

    /**
     * @example 22
     *
     * @var string
     */
    public $source;

    /**
     * @example video
     *
     * @var string
     */
    public $sourceType;

    /**
     * @var texts[]
     */
    public $texts;

    /**
     * @example cameraFirst
     *
     * @var string
     */
    public $videoOrder;

    /**
     * @var whiteboard
     */
    public $whiteboard;
    protected $_name = [
        'backgrounds' => 'Backgrounds',
        'images' => 'Images',
        'paneCropMode' => 'PaneCropMode',
        'paneId' => 'PaneId',
        'reservePaneForOfflineUser' => 'ReservePaneForOfflineUser',
        'source' => 'Source',
        'sourceType' => 'SourceType',
        'texts' => 'Texts',
        'videoOrder' => 'VideoOrder',
        'whiteboard' => 'Whiteboard',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgrounds) {
            $res['Backgrounds'] = [];
            if (null !== $this->backgrounds && \is_array($this->backgrounds)) {
                $n = 0;
                foreach ($this->backgrounds as $item) {
                    $res['Backgrounds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paneCropMode) {
            $res['PaneCropMode'] = $this->paneCropMode;
        }
        if (null !== $this->paneId) {
            $res['PaneId'] = $this->paneId;
        }
        if (null !== $this->reservePaneForOfflineUser) {
            $res['ReservePaneForOfflineUser'] = $this->reservePaneForOfflineUser;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->texts) {
            $res['Texts'] = [];
            if (null !== $this->texts && \is_array($this->texts)) {
                $n = 0;
                foreach ($this->texts as $item) {
                    $res['Texts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoOrder) {
            $res['VideoOrder'] = $this->videoOrder;
        }
        if (null !== $this->whiteboard) {
            $res['Whiteboard'] = null !== $this->whiteboard ? $this->whiteboard->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return panes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n = 0;
                foreach ($map['Backgrounds'] as $item) {
                    $model->backgrounds[$n++] = null !== $item ? backgrounds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaneCropMode'])) {
            $model->paneCropMode = $map['PaneCropMode'];
        }
        if (isset($map['PaneId'])) {
            $model->paneId = $map['PaneId'];
        }
        if (isset($map['ReservePaneForOfflineUser'])) {
            $model->reservePaneForOfflineUser = $map['ReservePaneForOfflineUser'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n = 0;
                foreach ($map['Texts'] as $item) {
                    $model->texts[$n++] = null !== $item ? texts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoOrder'])) {
            $model->videoOrder = $map['VideoOrder'];
        }
        if (isset($map['Whiteboard'])) {
            $model->whiteboard = whiteboard::fromMap($map['Whiteboard']);
        }

        return $model;
    }
}
