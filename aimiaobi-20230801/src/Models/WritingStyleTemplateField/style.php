<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateField;

use AlibabaCloud\Tea\Model;

class style extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var bool
     */
    public $showTime;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'format' => 'Format',
        'placeholder' => 'Placeholder',
        'showTime' => 'ShowTime',
        'suffix' => 'Suffix',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->placeholder) {
            $res['Placeholder'] = $this->placeholder;
        }
        if (null !== $this->showTime) {
            $res['ShowTime'] = $this->showTime;
        }
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return style
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Placeholder'])) {
            $model->placeholder = $map['Placeholder'];
        }
        if (isset($map['ShowTime'])) {
            $model->showTime = $map['ShowTime'];
        }
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
