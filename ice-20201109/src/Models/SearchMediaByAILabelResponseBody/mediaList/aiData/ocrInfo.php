<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData;

use AlibabaCloud\Tea\Model;

class ocrInfo extends Model
{
    /**
     * @description The ID of the clip.
     *
     * @example 5FE19530C7A422197535FE74F5DB****
     *
     * @var string
     */
    public $clipId;

    /**
     * @description The content of the text.
     *
     * @var string
     */
    public $content;

    /**
     * @description The start time of the clip.
     *
     * @example 1.4
     *
     * @var float
     */
    public $from;

    /**
     * @description The timestamp of the clip.
     *
     * @example 1.4
     *
     * @var float
     */
    public $timestamp;

    /**
     * @description The end time of the clip.
     *
     * @example 2.5
     *
     * @var float
     */
    public $to;
    protected $_name = [
        'clipId'    => 'ClipId',
        'content'   => 'Content',
        'from'      => 'From',
        'timestamp' => 'Timestamp',
        'to'        => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipId) {
            $res['ClipId'] = $this->clipId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ocrInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipId'])) {
            $model->clipId = $map['ClipId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
