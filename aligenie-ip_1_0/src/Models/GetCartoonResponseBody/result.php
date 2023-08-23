<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetCartoonResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example https://ai***.mp4
     *
     * @var string
     */
    public $startVideoMd5;

    /**
     * @example 40c8***97
     *
     * @var string
     */
    public $startVideoUrl;
    protected $_name = [
        'startVideoMd5' => 'StartVideoMd5',
        'startVideoUrl' => 'StartVideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startVideoMd5) {
            $res['StartVideoMd5'] = $this->startVideoMd5;
        }
        if (null !== $this->startVideoUrl) {
            $res['StartVideoUrl'] = $this->startVideoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartVideoMd5'])) {
            $model->startVideoMd5 = $map['StartVideoMd5'];
        }
        if (isset($map['StartVideoUrl'])) {
            $model->startVideoUrl = $map['StartVideoUrl'];
        }

        return $model;
    }
}
