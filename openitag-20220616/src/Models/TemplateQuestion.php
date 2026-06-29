<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class TemplateQuestion extends Model
{
    /**
     * @var TemplateQuestion[]
     */
    public $children;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
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
     * @var int
     */
    public $questionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'children' => 'Children',
        'exif' => 'Exif',
        'markTitle' => 'MarkTitle',
        'options' => 'Options',
        'preOptions' => 'PreOptions',
        'questionId' => 'QuestionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->preOptions)) {
            Model::validateArray($this->preOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exif) {
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->markTitle) {
            $res['MarkTitle'] = $this->markTitle;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preOptions) {
            if (\is_array($this->preOptions)) {
                $res['PreOptions'] = [];
                $n1 = 0;
                foreach ($this->preOptions as $item1) {
                    $res['PreOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->questionId) {
            $res['QuestionId'] = $this->questionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Exif'])) {
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
        }

        if (isset($map['MarkTitle'])) {
            $model->markTitle = $map['MarkTitle'];
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1] = QuestionOption::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PreOptions'])) {
            if (!empty($map['PreOptions'])) {
                $model->preOptions = [];
                $n1 = 0;
                foreach ($map['PreOptions'] as $item1) {
                    $model->preOptions[$n1] = $item1;
                    ++$n1;
                }
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
