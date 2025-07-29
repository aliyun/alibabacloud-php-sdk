<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class HotNewsRecommendRequest extends Model
{
    /**
     * @var string
     */
    public $prompt;
    protected $_name = [
        'prompt' => 'prompt',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotNewsRecommendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        return $model;
    }
}
