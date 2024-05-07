<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest\layoutStyles\videoStyles;
use AlibabaCloud\Tea\Model;

class layoutStyles extends Model
{
    /**
     * @example 3037
     *
     * @var int
     */
    public $height;

    /**
     * @example 2
     *
     * @var int
     */
    public $inputNum;

    /**
     * @var videoStyles[]
     */
    public $videoStyles;

    /**
     * @example 800
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'      => 'Height',
        'inputNum'    => 'InputNum',
        'videoStyles' => 'VideoStyles',
        'width'       => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->inputNum) {
            $res['InputNum'] = $this->inputNum;
        }
        if (null !== $this->videoStyles) {
            $res['VideoStyles'] = [];
            if (null !== $this->videoStyles && \is_array($this->videoStyles)) {
                $n = 0;
                foreach ($this->videoStyles as $item) {
                    $res['VideoStyles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layoutStyles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['InputNum'])) {
            $model->inputNum = $map['InputNum'];
        }
        if (isset($map['VideoStyles'])) {
            if (!empty($map['VideoStyles'])) {
                $model->videoStyles = [];
                $n                  = 0;
                foreach ($map['VideoStyles'] as $item) {
                    $model->videoStyles[$n++] = null !== $item ? videoStyles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
