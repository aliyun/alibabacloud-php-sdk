<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob;

use AlibabaCloud\Tea\Model;

class exportResult extends Model
{
    /**
     * @example {"VideoTracks":[{"VideoTrackClips":[{"Type":"Video","MediaId":"****4d7cf14dc7b83b0e801c****","MediaURL":"https://test-bucket.oss-cn-shanghai.aliyuncs.com/test.mp4","TimelineIn":0.0,"TimelineOut":5.0,"In":0.0,"Out":5.0,"Speed":1.0,"Duration":5.0,"VirginDuration":13.334,"Height":1.0,"Width":1.0,"X":0.0,"Y":0.0}]}]}
     *
     * @var string
     */
    public $timeline;
    protected $_name = [
        'timeline' => 'Timeline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }

        return $model;
    }
}
