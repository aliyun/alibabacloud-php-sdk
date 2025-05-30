<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class Hotword extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $text;

    /**
     * @var TranspositionResult[]
     */
    public $transpositionResultList;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'language' => 'Language',
        'text' => 'Text',
        'transpositionResultList' => 'TranspositionResultList',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        if (\is_array($this->transpositionResultList)) {
            Model::validateArray($this->transpositionResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->transpositionResultList) {
            if (\is_array($this->transpositionResultList)) {
                $res['TranspositionResultList'] = [];
                $n1 = 0;
                foreach ($this->transpositionResultList as $item1) {
                    $res['TranspositionResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TranspositionResultList'])) {
            if (!empty($map['TranspositionResultList'])) {
                $model->transpositionResultList = [];
                $n1 = 0;
                foreach ($map['TranspositionResultList'] as $item1) {
                    $model->transpositionResultList[$n1++] = TranspositionResult::fromMap($item1);
                }
            }
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
