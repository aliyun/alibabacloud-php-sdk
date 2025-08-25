<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;

class GenerateHumanAnimeStyleVideoRequest extends Model
{
    /**
     * @var string
     */
    public $cartoonStyle;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'cartoonStyle' => 'CartoonStyle',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cartoonStyle) {
            $res['CartoonStyle'] = $this->cartoonStyle;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['CartoonStyle'])) {
            $model->cartoonStyle = $map['CartoonStyle'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
