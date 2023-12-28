<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration;

use AlibabaCloud\Tea\Model;

class subDuration extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $audio;

    /**
     * @example 100
     *
     * @var int
     */
    public $content;

    /**
     * @example 100
     *
     * @var int
     */
    public $video1080;

    /**
     * @example 100
     *
     * @var int
     */
    public $video360;

    /**
     * @example 100
     *
     * @var int
     */
    public $video720;
    protected $_name = [
        'audio'     => 'Audio',
        'content'   => 'Content',
        'video1080' => 'Video1080',
        'video360'  => 'Video360',
        'video720'  => 'Video720',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->video1080) {
            $res['Video1080'] = $this->video1080;
        }
        if (null !== $this->video360) {
            $res['Video360'] = $this->video360;
        }
        if (null !== $this->video720) {
            $res['Video720'] = $this->video720;
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
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Video1080'])) {
            $model->video1080 = $map['Video1080'];
        }
        if (isset($map['Video360'])) {
            $model->video360 = $map['Video360'];
        }
        if (isset($map['Video720'])) {
            $model->video720 = $map['Video720'];
        }

        return $model;
    }
}
