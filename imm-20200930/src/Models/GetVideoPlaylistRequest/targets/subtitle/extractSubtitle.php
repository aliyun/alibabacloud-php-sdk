<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoPlaylistRequest\targets\subtitle;

use AlibabaCloud\Tea\Model;

class extractSubtitle extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'format' => 'Format',
        'URI'    => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extractSubtitle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
