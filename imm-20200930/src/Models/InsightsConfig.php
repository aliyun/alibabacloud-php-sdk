<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class InsightsConfig extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var VideoInsightsConfig
     */
    public $video;
    protected $_name = [
        'language' => 'Language',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Video'])) {
            $model->video = VideoInsightsConfig::fromMap($map['Video']);
        }

        return $model;
    }
}
