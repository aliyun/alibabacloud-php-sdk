<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\aiLabelInfo;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\aiLabelInfo\occurrences\tracks;
use AlibabaCloud\Tea\Model;

class occurrences extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 10310250338
     *
     * @var string
     */
    public $finegrainId;

    /**
     * @var string
     */
    public $finegrainName;

    /**
     * @example 1.4
     *
     * @var float
     */
    public $from;

    /**
     * @example 99C64F6287
     *
     * @var string
     */
    public $image;

    /**
     * @example 0.75287705
     *
     * @var float
     */
    public $score;

    /**
     * @example 85010D1
     *
     * @var string
     */
    public $tableBatchSeqId;

    /**
     * @example 2.5
     *
     * @var float
     */
    public $to;

    /**
     * @var tracks[]
     */
    public $tracks;

    /**
     * @example 5FE19530C7A422197535FE74F5DB2B9F
     *
     * @var string
     */
    public $clipId;
    protected $_name = [
        'content'         => 'Content',
        'finegrainId'     => 'FinegrainId',
        'finegrainName'   => 'FinegrainName',
        'from'            => 'From',
        'image'           => 'Image',
        'score'           => 'Score',
        'tableBatchSeqId' => 'TableBatchSeqId',
        'to'              => 'To',
        'tracks'          => 'Tracks',
        'clipId'          => 'clipId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->clipId) {
            $res['clipId'] = $this->clipId;
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
        if (isset($map['clipId'])) {
            $model->clipId = $map['clipId'];
        }

        return $model;
    }
}
