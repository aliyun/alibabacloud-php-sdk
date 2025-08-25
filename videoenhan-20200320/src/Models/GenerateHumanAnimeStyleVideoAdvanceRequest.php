<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateHumanAnimeStyleVideoAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $cartoonStyle;

    /**
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'cartoonStyle' => 'CartoonStyle',
        'videoUrlObject' => 'VideoUrl',
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

        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
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
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}
