<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\aiLabelInfo\occurrences;

class aiLabelInfo extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $faceId;
    /**
     * @var string
     */
    public $labelId;
    /**
     * @var string
     */
    public $labelName;
    /**
     * @var string
     */
    public $labelType;
    /**
     * @var occurrences[]
     */
    public $occurrences;
    /**
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
        if (\is_array($this->occurrences)) {
            Model::validateArray($this->occurrences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->occurrences)) {
                $res['Occurrences'] = [];
                $n1                 = 0;
                foreach ($this->occurrences as $item1) {
                    $res['Occurrences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
                $n1                 = 0;
                foreach ($map['Occurrences'] as $item1) {
                    $model->occurrences[$n1++] = occurrences::fromMap($item1);
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
