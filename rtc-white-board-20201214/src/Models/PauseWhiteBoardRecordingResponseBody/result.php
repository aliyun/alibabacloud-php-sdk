<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\PauseWhiteBoardRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 录制结束的UNIX时间戳
     *
     * @var int
     */
    public $pauseTime;
    protected $_name = [
        'pauseTime' => 'PauseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pauseTime) {
            $res['PauseTime'] = $this->pauseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PauseTime'])) {
            $model->pauseTime = $map['PauseTime'];
        }

        return $model;
    }
}
