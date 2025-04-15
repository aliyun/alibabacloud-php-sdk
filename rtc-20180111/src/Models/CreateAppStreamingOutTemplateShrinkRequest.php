<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class CreateAppStreamingOutTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $streamingOutTemplateShrink;
    protected $_name = [
        'appId' => 'AppId',
        'streamingOutTemplateShrink' => 'StreamingOutTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->streamingOutTemplateShrink) {
            $res['StreamingOutTemplate'] = $this->streamingOutTemplateShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['StreamingOutTemplate'])) {
            $model->streamingOutTemplateShrink = $map['StreamingOutTemplate'];
        }

        return $model;
    }
}
