<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData\aiLabelInfo\occurrences;

class aiLabelInfo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $labelId;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @var occurrences[]
     */
    public $occurrences;
    protected $_name = [
        'category' => 'Category',
        'labelId' => 'LabelId',
        'labelName' => 'LabelName',
        'occurrences' => 'Occurrences',
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

        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }

        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        if (null !== $this->occurrences) {
            if (\is_array($this->occurrences)) {
                $res['Occurrences'] = [];
                $n1 = 0;
                foreach ($this->occurrences as $item1) {
                    $res['Occurrences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['Occurrences'] as $item1) {
                    $model->occurrences[$n1++] = occurrences::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
