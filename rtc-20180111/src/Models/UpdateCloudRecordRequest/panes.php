<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest\panes\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest\panes\texts;
use AlibabaCloud\Tea\Model;

class panes extends Model
{
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
    protected $_name = [
        'images'       => 'Images',
        'paneCropMode' => 'PaneCropMode',
        'paneId'       => 'PaneId',
        'source'       => 'Source',
        'sourceType'   => 'SourceType',
        'texts'        => 'Texts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n            = 0;
                foreach ($map['Texts'] as $item) {
                    $model->texts[$n++] = null !== $item ? texts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
