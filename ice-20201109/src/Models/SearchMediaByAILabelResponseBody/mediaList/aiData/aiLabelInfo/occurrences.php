<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\aiLabelInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\aiLabelInfo\occurrences\tracks;

class occurrences extends Model
{
    /**
     * @var string
     */
    public $clipId;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $finegrainId;
    /**
     * @var string
     */
    public $finegrainName;
    /**
     * @var float
     */
    public $from;
    /**
     * @var string
     */
    public $image;
    /**
     * @var float
     */
    public $score;
    /**
     * @var string
     */
    public $tableBatchSeqId;
    /**
     * @var float
     */
    public $to;
    /**
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
        if (\is_array($this->tracks)) {
            Model::validateArray($this->tracks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tracks)) {
                $res['Tracks'] = [];
                $n1            = 0;
                foreach ($this->tracks as $item1) {
                    $res['Tracks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1            = 0;
                foreach ($map['Tracks'] as $item1) {
                    $model->tracks[$n1++] = tracks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
