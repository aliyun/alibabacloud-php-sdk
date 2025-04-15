<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\texts;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest\panes\whiteboard;

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
     * @var int
     */
    public $paneCropMode;

    /**
     * @var int
     */
    public $paneId;

    /**
     * @var bool
     */
    public $reservePaneForOfflineUser;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var texts[]
     */
    public $texts;

    /**
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

    public function validate()
    {
        if (\is_array($this->backgrounds)) {
            Model::validateArray($this->backgrounds);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        if (null !== $this->whiteboard) {
            $this->whiteboard->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgrounds) {
            if (\is_array($this->backgrounds)) {
                $res['Backgrounds'] = [];
                $n1 = 0;
                foreach ($this->backgrounds as $item1) {
                    $res['Backgrounds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->texts)) {
                $res['Texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['Texts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->videoOrder) {
            $res['VideoOrder'] = $this->videoOrder;
        }

        if (null !== $this->whiteboard) {
            $res['Whiteboard'] = null !== $this->whiteboard ? $this->whiteboard->toArray($noStream) : $this->whiteboard;
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
        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n1 = 0;
                foreach ($map['Backgrounds'] as $item1) {
                    $model->backgrounds[$n1++] = backgrounds::fromMap($item1);
                }
            }
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1++] = images::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Texts'] as $item1) {
                    $model->texts[$n1++] = texts::fromMap($item1);
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
