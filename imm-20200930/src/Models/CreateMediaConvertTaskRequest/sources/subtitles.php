<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\sources;

use AlibabaCloud\Tea\Model;

class subtitles extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var float
     */
    public $timeOffset;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'language'   => 'Language',
        'timeOffset' => 'TimeOffset',
        'URI'        => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->timeOffset) {
            $res['TimeOffset'] = $this->timeOffset;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TimeOffset'])) {
            $model->timeOffset = $map['TimeOffset'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
