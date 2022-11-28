<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
     * @var string
     */
    public $backgroundImageUrl;

    /**
     * @var bool
     */
    public $isAlpha;

    /**
     * @var bool
     */
    public $isSubtitles;
    protected $_name = [
        'backgroundImageUrl' => 'BackgroundImageUrl',
        'isAlpha'            => 'IsAlpha',
        'isSubtitles'        => 'IsSubtitles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundImageUrl) {
            $res['BackgroundImageUrl'] = $this->backgroundImageUrl;
        }
        if (null !== $this->isAlpha) {
            $res['IsAlpha'] = $this->isAlpha;
        }
        if (null !== $this->isSubtitles) {
            $res['IsSubtitles'] = $this->isSubtitles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundImageUrl'])) {
            $model->backgroundImageUrl = $map['BackgroundImageUrl'];
        }
        if (isset($map['IsAlpha'])) {
            $model->isAlpha = $map['IsAlpha'];
        }
        if (isset($map['IsSubtitles'])) {
            $model->isSubtitles = $map['IsSubtitles'];
        }

        return $model;
    }
}
