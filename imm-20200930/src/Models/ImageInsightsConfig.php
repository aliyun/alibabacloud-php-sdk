<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ImageInsightsConfig extends Model
{
    /**
     * @var ImageInsightsCaptionConfig
     */
    public $caption;
    protected $_name = [
        'caption' => 'Caption',
    ];

    public function validate()
    {
        if (null !== $this->caption) {
            $this->caption->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = null !== $this->caption ? $this->caption->toArray($noStream) : $this->caption;
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
        if (isset($map['Caption'])) {
            $model->caption = ImageInsightsCaptionConfig::fromMap($map['Caption']);
        }

        return $model;
    }
}
