<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList\liveAudioAuditConfig;

use AlibabaCloud\Tea\Model;

class scenes extends Model
{
    /**
     * @var string[]
     */
    public $scene;
    protected $_name = [
        'scene' => 'scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scene'])) {
            if (!empty($map['scene'])) {
                $model->scene = $map['scene'];
            }
        }

        return $model;
    }
}
