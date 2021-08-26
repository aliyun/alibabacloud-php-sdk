<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Label extends Model
{
    /**
     * @description Language
     *
     * @var string
     */
    public $language;

    /**
     * @description LabelName
     *
     * @var string
     */
    public $labelName;

    /**
     * @description LabelLevel
     *
     * @var int
     */
    public $labelLevel;

    /**
     * @description LabelConfidence
     *
     * @var float
     */
    public $labelConfidence;
    protected $_name = [
        'language'        => 'Language',
        'labelName'       => 'LabelName',
        'labelLevel'      => 'LabelLevel',
        'labelConfidence' => 'LabelConfidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->labelLevel) {
            $res['LabelLevel'] = $this->labelLevel;
        }
        if (null !== $this->labelConfidence) {
            $res['LabelConfidence'] = $this->labelConfidence;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['LabelLevel'])) {
            $model->labelLevel = $map['LabelLevel'];
        }
        if (isset($map['LabelConfidence'])) {
            $model->labelConfidence = $map['LabelConfidence'];
        }

        return $model;
    }
}
