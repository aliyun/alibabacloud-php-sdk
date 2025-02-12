<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration;

use AlibabaCloud\Dara\Model;

class subDuration extends Model
{
    /**
     * @var int
     */
    public $audio;
    /**
     * @var int
     */
    public $content;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
