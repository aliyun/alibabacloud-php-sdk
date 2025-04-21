<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponseBody\data\videoInfo;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $tagInfo;

    /**
     * @var videoInfo
     */
    public $videoInfo;
    protected $_name = [
        'tagInfo' => 'TagInfo',
        'videoInfo' => 'VideoInfo',
    ];

    public function validate()
    {
        if (\is_array($this->tagInfo)) {
            Model::validateArray($this->tagInfo);
        }
        if (null !== $this->videoInfo) {
            $this->videoInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagInfo) {
            if (\is_array($this->tagInfo)) {
                $res['TagInfo'] = [];
                foreach ($this->tagInfo as $key1 => $value1) {
                    $res['TagInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->videoInfo) {
            $res['VideoInfo'] = null !== $this->videoInfo ? $this->videoInfo->toArray($noStream) : $this->videoInfo;
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
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                foreach ($map['TagInfo'] as $key1 => $value1) {
                    $model->tagInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['VideoInfo'])) {
            $model->videoInfo = videoInfo::fromMap($map['VideoInfo']);
        }

        return $model;
    }
}
