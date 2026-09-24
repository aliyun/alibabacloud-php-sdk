<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\GeneralRephotographyDetectionResponseBody\data\result\grounding;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var float[]
     */
    public $bbox2d;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'bbox2d' => 'Bbox2d',
        'label' => 'Label',
        'text' => 'Text',
    ];

    public function validate()
    {
        if (\is_array($this->bbox2d)) {
            Model::validateArray($this->bbox2d);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bbox2d) {
            if (\is_array($this->bbox2d)) {
                $res['Bbox2d'] = [];
                $n1 = 0;
                foreach ($this->bbox2d as $item1) {
                    $res['Bbox2d'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['Bbox2d'])) {
            if (!empty($map['Bbox2d'])) {
                $model->bbox2d = [];
                $n1 = 0;
                foreach ($map['Bbox2d'] as $item1) {
                    $model->bbox2d[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
