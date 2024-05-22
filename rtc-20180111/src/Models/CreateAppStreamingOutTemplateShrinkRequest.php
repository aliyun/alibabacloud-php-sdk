<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppStreamingOutTemplateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamingOutTemplateShrink;
    protected $_name = [
        'appId'                      => 'AppId',
        'streamingOutTemplateShrink' => 'StreamingOutTemplate',
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
        if (null !== $this->streamingOutTemplateShrink) {
            $res['StreamingOutTemplate'] = $this->streamingOutTemplateShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppStreamingOutTemplateShrinkRequest
     */
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
