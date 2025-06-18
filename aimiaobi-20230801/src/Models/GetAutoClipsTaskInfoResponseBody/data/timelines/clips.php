<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\timelines;

use AlibabaCloud\Dara\Model;

class clips extends Model
{
    /**
     * @var string
     */
    public $clipId;

    /**
     * @var string
     */
    public $contentInner;

    /**
     * @var int
     */
    public $in;

    /**
     * @var int
     */
    public $out;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $videoName;
    protected $_name = [
        'clipId' => 'ClipId',
        'contentInner' => 'ContentInner',
        'in' => 'In',
        'out' => 'Out',
        'videoId' => 'VideoId',
        'videoName' => 'VideoName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipId) {
            $res['ClipId'] = $this->clipId;
        }

        if (null !== $this->contentInner) {
            $res['ContentInner'] = $this->contentInner;
        }

        if (null !== $this->in) {
            $res['In'] = $this->in;
        }

        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
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
        if (isset($map['ClipId'])) {
            $model->clipId = $map['ClipId'];
        }

        if (isset($map['ContentInner'])) {
            $model->contentInner = $map['ContentInner'];
        }

        if (isset($map['In'])) {
            $model->in = $map['In'];
        }

        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }

        return $model;
    }
}
