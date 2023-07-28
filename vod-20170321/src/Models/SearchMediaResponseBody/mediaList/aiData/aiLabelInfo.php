<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData\aiLabelInfo\occurrences;
use AlibabaCloud\Tea\Model;

class aiLabelInfo extends Model
{
    /**
     * @description The category.
     *
     * @example Transportation
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the tag.
     *
     * @example 10310250338
     *
     * @var string
     */
    public $labelId;

    /**
     * @description The name of the tag.
     *
     * @example Vehicles
     *
     * @var string
     */
    public $labelName;

    /**
     * @description The clips.
     *
     * @var occurrences[]
     */
    public $occurrences;
    protected $_name = [
        'category'    => 'Category',
        'labelId'     => 'LabelId',
        'labelName'   => 'LabelName',
        'occurrences' => 'Occurrences',
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
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
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
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
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

        return $model;
    }
}
