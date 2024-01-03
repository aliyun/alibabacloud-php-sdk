<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class TemplateQuestion extends Model
{
    /**
     * @var \AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateQuestion[]
     */
    public $children;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @example 题目1
     *
     * @var string
     */
    public $markTitle;

    /**
     * @var QuestionOption[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $preOptions;

    /**
     * @example 1
     *
     * @var int
     */
    public $questionId;

    /**
     * @example RADIO/GROUP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'children'   => 'Children',
        'exif'       => 'Exif',
        'markTitle'  => 'MarkTitle',
        'options'    => 'Options',
        'preOptions' => 'PreOptions',
        'questionId' => 'QuestionId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->markTitle) {
            $res['MarkTitle'] = $this->markTitle;
        }
        if (null !== $this->options) {
            $res['Options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['Options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preOptions) {
            $res['PreOptions'] = $this->preOptions;
        }
        if (null !== $this->questionId) {
            $res['QuestionId'] = $this->questionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateQuestion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['MarkTitle'])) {
            $model->markTitle = $map['MarkTitle'];
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['Options'] as $item) {
                    $model->options[$n++] = null !== $item ? QuestionOption::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PreOptions'])) {
            if (!empty($map['PreOptions'])) {
                $model->preOptions = $map['PreOptions'];
            }
        }
        if (isset($map['QuestionId'])) {
            $model->questionId = $map['QuestionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
