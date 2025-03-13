<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class VideoModerationResultRequest extends Model
{
    /**
     * @description The type of the moderation service.
     *
     * Valid values:
     *
     *   liveStreamDetection: live stream moderation
     *   videoDetection: video file moderation
     *   liveStreamDetection_cb: live stream moderation_For regions outside the Chinese mainland
     *   videoDetection_cb: video file moderation_For regions outside the Chinese mainland.
     *
     * @example videoDetection
     *
     * @var string
     */
    public $service;

    /**
     * @description The parameters required by the moderation service. The ID of the task that you want to query. You can specify one task ID at a time.
     *
     * @example {\\"taskId\\":\\"au_f_8PoWiZKoLbczp5HRn69VdT-1y8@U5\\"}
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
     * @return VideoModerationResultRequest
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
