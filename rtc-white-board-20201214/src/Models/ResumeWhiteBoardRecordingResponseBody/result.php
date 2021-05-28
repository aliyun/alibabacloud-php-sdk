<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\ResumeWhiteBoardRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 录制结束的UNIX时间戳
     *
     * @var int
     */
    public $resumeTime;
    protected $_name = [
        'resumeTime' => 'ResumeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resumeTime) {
            $res['ResumeTime'] = $this->resumeTime;
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
        if (isset($map['ResumeTime'])) {
            $model->resumeTime = $map['ResumeTime'];
        }

        return $model;
    }
}
