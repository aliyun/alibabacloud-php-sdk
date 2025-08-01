<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\QuestionAnswer;

use AlibabaCloud\Tea\Model;

class groundTruth extends Model
{
    /**
     * @var string[]
     */
    public $contexts;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'contexts' => 'Contexts',
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contexts) {
            $res['Contexts'] = $this->contexts;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groundTruth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contexts'])) {
            if (!empty($map['Contexts'])) {
                $model->contexts = $map['Contexts'];
            }
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
