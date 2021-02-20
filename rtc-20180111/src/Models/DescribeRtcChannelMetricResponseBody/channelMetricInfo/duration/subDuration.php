<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration;

use AlibabaCloud\Tea\Model;

class subDuration extends Model
{
    /**
     * @var int
     */
    public $video720;

    /**
     * @var int
     */
    public $video1080;

    /**
     * @var int
     */
    public $video360;

    /**
     * @var int
     */
    public $content;

    /**
     * @var int
     */
    public $audio;
    protected $_name = [
        'video720'  => 'Video720',
        'video1080' => 'Video1080',
        'video360'  => 'Video360',
        'content'   => 'Content',
        'audio'     => 'Audio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->video720) {
            $res['Video720'] = $this->video720;
        }
        if (null !== $this->video1080) {
            $res['Video1080'] = $this->video1080;
        }
        if (null !== $this->video360) {
            $res['Video360'] = $this->video360;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subDuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Video720'])) {
            $model->video720 = $map['Video720'];
        }
        if (isset($map['Video1080'])) {
            $model->video1080 = $map['Video1080'];
        }
        if (isset($map['Video360'])) {
            $model->video360 = $map['Video360'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }

        return $model;
    }
}
