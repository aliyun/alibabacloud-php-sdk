<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $styles;
    protected $_name = [
        'styles' => 'Styles',
    ];

    public function validate()
    {
        if (\is_array($this->styles)) {
            Model::validateArray($this->styles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->styles) {
            if (\is_array($this->styles)) {
                $res['Styles'] = [];
                $n1 = 0;
                foreach ($this->styles as $item1) {
                    $res['Styles'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Styles'])) {
            if (!empty($map['Styles'])) {
                $model->styles = [];
                $n1 = 0;
                foreach ($map['Styles'] as $item1) {
                    $model->styles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
