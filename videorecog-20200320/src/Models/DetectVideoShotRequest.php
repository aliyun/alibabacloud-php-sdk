<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoShotRequest extends Model
{
    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'async'    => 'Async',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVideoShotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        return $model;
    }
}
