<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppStreamingOutTemplateRequest\streamingOutTemplate;
use AlibabaCloud\Tea\Model;

class DeleteAppStreamingOutTemplateRequest extends Model
{
    /**
     * @example wv7N****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->streamingOutTemplate) {
            $res['StreamingOutTemplate'] = null !== $this->streamingOutTemplate ? $this->streamingOutTemplate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppStreamingOutTemplateRequest
     */
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
