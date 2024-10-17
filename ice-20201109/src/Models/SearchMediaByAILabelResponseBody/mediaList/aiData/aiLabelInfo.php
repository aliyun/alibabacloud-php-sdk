<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\aiLabelInfo\occurrences;
use AlibabaCloud\Tea\Model;

class aiLabelInfo extends Model
{
    /**
     * @description The category.
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the face.
     *
     * @example 5FE19530C7A422197535FE74F5DB****
     *
     * @var string
     */
    public $faceId;

    /**
     * @description The ID of the entity.
     *
     * @example 103102503**
     *
     * @var string
     */
    public $labelId;

    /**
     * @description The name of the entity.
     *
     * @var string
     */
    public $labelName;

    /**
     * @description The type of the tag.
     *
     * @var string
     */
    public $labelType;

    /**
     * @description The information about the clips.
     *
     * @var occurrences[]
     */
    public $occurrences;

    /**
     * @description The source.
     *
     * @example vision
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'category'    => 'Category',
        'faceId'      => 'FaceId',
        'labelId'     => 'LabelId',
        'labelName'   => 'LabelName',
        'labelType'   => 'LabelType',
        'occurrences' => 'Occurrences',
        'source'      => 'Source',
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
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->labelType) {
            $res['LabelType'] = $this->labelType;
        }
        if (null !== $this->occurrences) {
            $res['Occurrences'] = [];
            if (null !== $this->occurrences && \is_array($this->occurrences)) {
                $n = 0;
                foreach ($this->occurrences as $item) {
                    $res['Occurrences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiLabelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['LabelType'])) {
            $model->labelType = $map['LabelType'];
        }
        if (isset($map['Occurrences'])) {
            if (!empty($map['Occurrences'])) {
                $model->occurrences = [];
                $n                  = 0;
                foreach ($map['Occurrences'] as $item) {
                    $model->occurrences[$n++] = null !== $item ? occurrences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
