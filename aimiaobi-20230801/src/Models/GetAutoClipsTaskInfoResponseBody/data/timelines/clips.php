<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\timelines;

use AlibabaCloud\Tea\Model;

class clips extends Model
{
    /**
     * @example 20774ebd9abc71ef80486632b68f0102
     *
     * @var string
     */
    public $clipId;

    /**
     * @var string
     */
    public $contentInner;

    /**
     * @example 0
     *
     * @var int
     */
    public $in;

    /**
     * @var float
     */
    public $inEx;

    /**
     * @example 5
     *
     * @var int
     */
    public $out;

    /**
     * @var float
     */
    public $outEx;

    /**
     * @example 20774ebd9abc71ef80486632b68f0102
     *
     * @var string
     */
    public $videoId;

    /**
     * @example 123.mp4
     *
     * @var string
     */
    public $videoName;
    protected $_name = [
        'clipId' => 'ClipId',
        'contentInner' => 'ContentInner',
        'in' => 'In',
        'inEx' => 'InEx',
        'out' => 'Out',
        'outEx' => 'OutEx',
        'videoId' => 'VideoId',
        'videoName' => 'VideoName',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->inEx) {
            $res['InEx'] = $this->inEx;
        }
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->outEx) {
            $res['OutEx'] = $this->outEx;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clips
     */
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
        if (isset($map['InEx'])) {
            $model->inEx = $map['InEx'];
        }
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['OutEx'])) {
            $model->outEx = $map['OutEx'];
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
