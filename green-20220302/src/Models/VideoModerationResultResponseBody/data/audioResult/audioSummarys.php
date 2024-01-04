<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult;

use AlibabaCloud\Tea\Model;

class audioSummarys extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $labelSum;
    protected $_name = [
        'label'    => 'Label',
        'labelSum' => 'LabelSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return audioSummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['LabelSum'])) {
            $model->labelSum = $map['LabelSum'];
        }

        return $model;
    }
}
