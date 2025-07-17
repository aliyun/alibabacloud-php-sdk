<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\textSummary;

use AlibabaCloud\Tea\Model;

class textLabels extends Model
{
    /**
     * @description The description of the labels.
     *
     * @example no risk
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the labels.
     *
     * @example contraband
     *
     * @var string
     */
    public $label;

    /**
     * @description The number of times that the label is matched.
     *
     * @example 1
     *
     * @var int
     */
    public $labelSum;
    protected $_name = [
        'description' => 'Description',
        'label' => 'Label',
        'labelSum' => 'LabelSum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->labelSum) {
            $res['LabelSum'] = $this->labelSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textLabels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['LabelSum'])) {
            $model->labelSum = $map['LabelSum'];
        }

        return $model;
    }
}
