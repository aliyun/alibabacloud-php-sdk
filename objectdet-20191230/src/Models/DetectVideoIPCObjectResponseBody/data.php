<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectResponseBody;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectResponseBody\data\frames;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 视频文件的分辨率(像素)
     *
     * @var int
     */
    public $width;

    /**
     * @description 视频文件的分辨率(像素)
     *
     * @var int
     */
    public $height;

    /**
     * @description 视频帧的集合，未检测到目标的帧不列出
     *
     * @var frames[]
     */
    public $frames;
    protected $_name = [
        'width'  => 'Width',
        'height' => 'Height',
        'frames' => 'Frames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->frames) {
            $res['Frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['Frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['Frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
