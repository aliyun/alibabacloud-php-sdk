<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos;
use AlibabaCloud\Tea\Model;

class mediaClipList extends Model
{
    /**
     * @example celebrity
     *
     * @var string
     */
    public $category;

    /**
     * @example 1031025****
     *
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @var occurrencesInfos[]
     */
    public $occurrencesInfos;

    /**
     * @example 0.99041677
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'category'         => 'Category',
        'entityId'         => 'EntityId',
        'labelName'        => 'LabelName',
        'occurrencesInfos' => 'OccurrencesInfos',
        'score'            => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->occurrencesInfos) {
            $res['OccurrencesInfos'] = [];
            if (null !== $this->occurrencesInfos && \is_array($this->occurrencesInfos)) {
                $n = 0;
                foreach ($this->occurrencesInfos as $item) {
                    $res['OccurrencesInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaClipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['OccurrencesInfos'])) {
            if (!empty($map['OccurrencesInfos'])) {
                $model->occurrencesInfos = [];
                $n                       = 0;
                foreach ($map['OccurrencesInfos'] as $item) {
                    $model->occurrencesInfos[$n++] = null !== $item ? occurrencesInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
