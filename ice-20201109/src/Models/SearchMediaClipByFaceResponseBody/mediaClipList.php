<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos;
use AlibabaCloud\Tea\Model;

class mediaClipList extends Model
{
    /**
     * @description The type of the character. Valid values: celebrity sensitive politician custom unknown
     *
     * @example celebrity
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the entity, which is the same as the entity ID returned in tag analysis.
     *
     * @example 1031025****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The name of the entity.
     *
     * @var string
     */
    public $labelName;

    /**
     * @description The information about clips related to the face.
     *
     * @var occurrencesInfos[]
     */
    public $occurrencesInfos;

    /**
     * @description The score of the clip. The value is of the Float type. The value is in the range of [0,1].
     *
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
