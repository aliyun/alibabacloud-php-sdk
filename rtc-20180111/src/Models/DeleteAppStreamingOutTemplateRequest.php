<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppStreamingOutTemplateRequest\streamingOutTemplate;

class DeleteAppStreamingOutTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var streamingOutTemplate
     */
    public $streamingOutTemplate;
    protected $_name = [
        'appId'                => 'AppId',
        'streamingOutTemplate' => 'StreamingOutTemplate',
    ];

    public function validate()
    {
        if (null !== $this->streamingOutTemplate) {
            $this->streamingOutTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->streamingOutTemplate) {
            $res['StreamingOutTemplate'] = null !== $this->streamingOutTemplate ? $this->streamingOutTemplate->toArray($noStream) : $this->streamingOutTemplate;
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
            $model->streamingOutTemplate = streamingOutTemplate::fromMap($map['StreamingOutTemplate']);
        }

        return $model;
    }
}
