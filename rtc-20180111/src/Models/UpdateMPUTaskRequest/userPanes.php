<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest\userPanes\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest\userPanes\texts;
use AlibabaCloud\Tea\Model;

class userPanes extends Model
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
    public $paneId;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentType;

    /**
     * @example camera
     *
     * @var string
     */
    public $sourceType;

    /**
     * @var texts[]
     */
    public $texts;

    /**
     * @example TestUserID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'images' => 'Images',
        'paneId' => 'PaneId',
        'segmentType' => 'SegmentType',
        'sourceType' => 'SourceType',
        'texts' => 'Texts',
        'userId' => 'UserId',
    ];

    public function validate() {}

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
        if (null !== $this->paneId) {
            $res['PaneId'] = $this->paneId;
        }
        if (null !== $this->segmentType) {
            $res['SegmentType'] = $this->segmentType;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPanes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaneId'])) {
            $model->paneId = $map['PaneId'];
        }
        if (isset($map['SegmentType'])) {
            $model->segmentType = $map['SegmentType'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
