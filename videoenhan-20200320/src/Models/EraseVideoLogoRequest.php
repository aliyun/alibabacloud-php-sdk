<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoRequest\boxes;
use AlibabaCloud\Tea\Model;

class EraseVideoLogoRequest extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/EraseVideoLogo/EraseVideoLogo1.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'boxes'    => 'Boxes',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EraseVideoLogoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
