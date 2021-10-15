<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Label extends Model
{
    /**
     * @description LabelConfidence
     *
     * @var float
     */
    public $labelConfidence;

    /**
     * @description LabelLevel
     *
     * @var int
     */
    public $labelLevel;

    /**
     * @description LabelName
     *
     * @var string
     */
    public $labelName;

    /**
     * @description Language
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'labelConfidence' => 'LabelConfidence',
        'labelLevel'      => 'LabelLevel',
        'labelName'       => 'LabelName',
        'language'        => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelConfidence) {
            $res['LabelConfidence'] = $this->labelConfidence;
        }
        if (null !== $this->labelLevel) {
            $res['LabelLevel'] = $this->labelLevel;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Label
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelConfidence'])) {
            $model->labelConfidence = $map['LabelConfidence'];
        }
        if (isset($map['LabelLevel'])) {
            $model->labelLevel = $map['LabelLevel'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
