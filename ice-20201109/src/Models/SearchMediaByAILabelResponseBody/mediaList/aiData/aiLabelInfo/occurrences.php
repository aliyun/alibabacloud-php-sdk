<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\aiLabelInfo;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\aiLabelInfo\occurrences\tracks;
use AlibabaCloud\Tea\Model;

class occurrences extends Model
{
    /**
     * @description The ID of the clip.
     *
     * @example 158730355E4B82257D8AA1583A58****
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
     * @description The fine-grained ID of the entity.
     *
     * @example 103102503**
     *
     * @var string
     */
    public $finegrainId;

    /**
     * @description The fine-grained name of the entity.
     *
     * @var string
     */
    public $finegrainName;

    /**
     * @description The start time of the clip.
     *
     * @example 1.4
     *
     * @var float
     */
    public $from;

    /**
     * @description The image that contains the most face information.
     *
     * @example https://service-****-public.oss-cn-hangzhou.aliyuncs.com/1563457****438522/service-image/f788974f-9595-43b2-a478-7c7a1afb****.jpg
     *
     * @var string
     */
    public $image;

    /**
     * @description The score.
     *
     * @example 0.75287705
     *
     * @var float
     */
    public $score;

    /**
     * @description The sequence ID of the vector table.
     *
     * @example 85010D1**
     *
     * @var string
     */
    public $tableBatchSeqId;

    /**
     * @description The end time of the clip.
     *
     * @example 2.5
     *
     * @var float
     */
    public $to;

    /**
     * @description The tracks.
     *
     * @var tracks[]
     */
    public $tracks;
    protected $_name = [
        'clipId'          => 'ClipId',
        'content'         => 'Content',
        'finegrainId'     => 'FinegrainId',
        'finegrainName'   => 'FinegrainName',
        'from'            => 'From',
        'image'           => 'Image',
        'score'           => 'Score',
        'tableBatchSeqId' => 'TableBatchSeqId',
        'to'              => 'To',
        'tracks'          => 'Tracks',
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
        if (null !== $this->finegrainId) {
            $res['FinegrainId'] = $this->finegrainId;
        }
        if (null !== $this->finegrainName) {
            $res['FinegrainName'] = $this->finegrainName;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->tableBatchSeqId) {
            $res['TableBatchSeqId'] = $this->tableBatchSeqId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->tracks) {
            $res['Tracks'] = [];
            if (null !== $this->tracks && \is_array($this->tracks)) {
                $n = 0;
                foreach ($this->tracks as $item) {
                    $res['Tracks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return occurrences
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
        if (isset($map['FinegrainId'])) {
            $model->finegrainId = $map['FinegrainId'];
        }
        if (isset($map['FinegrainName'])) {
            $model->finegrainName = $map['FinegrainName'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TableBatchSeqId'])) {
            $model->tableBatchSeqId = $map['TableBatchSeqId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Tracks'])) {
            if (!empty($map['Tracks'])) {
                $model->tracks = [];
                $n             = 0;
                foreach ($map['Tracks'] as $item) {
                    $model->tracks[$n++] = null !== $item ? tracks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
