<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextToSignVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
     * @var bool
     */
    public $isAlpha;

    /**
     * @var bool
     */
    public $isSubtitles;

    /**
     * @var int
     */
    public $resolution;
    protected $_name = [
        'isAlpha'     => 'IsAlpha',
        'isSubtitles' => 'IsSubtitles',
        'resolution'  => 'Resolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAlpha) {
            $res['IsAlpha'] = $this->isAlpha;
        }
        if (null !== $this->isSubtitles) {
            $res['IsSubtitles'] = $this->isSubtitles;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
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
        if (isset($map['IsAlpha'])) {
            $model->isAlpha = $map['IsAlpha'];
        }
        if (isset($map['IsSubtitles'])) {
            $model->isSubtitles = $map['IsSubtitles'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
