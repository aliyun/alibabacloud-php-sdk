<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class ImageModerationRequest extends Model
{
    /**
     * @description The moderation services supported by Image Moderation 2.0. Valid values:
     *
     *   baselineCheck: common baseline moderation
     *   baselineCheck_pro: common baseline moderation_Professional
     *   baselineCheck_cb: common baseline moderation_For regions outside the Chinese mainland
     *   tonalityImprove: content governance moderation
     *   aigcCheck: AI-generated image identification
     *   profilePhotoCheck: avatar image moderation
     *   advertisingCheck: marketing material identification
     *   liveStreamCheck: moderation of screenshots of videos and live streams
     *
     * Valid values:
     *
     *   liveStreamCheck: moderation of screenshots of videos and live streams
     *   baselineCheck: common baseline moderation
     *   aigcCheck: AI-generated image identification
     *   baselineCheck_pro: common baseline moderation_Professional
     *   advertisingCheck: marketing material identification
     *   baselineCheck_cb: common baseline moderation_For regions outside the Chinese mainland
     *   tonalityImprove: content governance moderation
     *   profilePhotoCheck: avatar image moderation
     *
     * @example baselineCheck
     *
     * @var string
     */
    public $service;

    /**
     * @description The parameters required by the moderation service. The value is a JSON string.
     *
     *   imageUrl: the URL of the object that you want to moderate. This parameter is required.
     *   dataId: the ID of the object that you want to moderate. This parameter is optional.
     *
     * @example {"imageUrl":"https://www.aliyun.com/test.jpg","dataId":"img1234567"}
     *
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'service'           => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageModerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
