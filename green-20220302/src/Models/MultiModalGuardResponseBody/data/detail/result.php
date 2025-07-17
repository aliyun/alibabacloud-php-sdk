<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardResponseBody\data\detail;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $description;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $ext;

    /**
     * @example contraband_act
     *
     * @var string
     */
    public $label;

    /**
     * @example none
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'confidence' => 'Confidence',
        'description' => 'Description',
        'ext' => 'Ext',
        'label' => 'Label',
        'level' => 'Level',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
