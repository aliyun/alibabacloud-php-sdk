<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ModelTypeDetermineRequest\history;

class ModelTypeDetermineRequest extends Model
{
    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $inputText;
    protected $_name = [
        'history' => 'history',
        'inputText' => 'inputText',
    ];

    public function validate()
    {
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['history'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['history'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputText) {
            $res['inputText'] = $this->inputText;
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
        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['history'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['inputText'])) {
            $model->inputText = $map['inputText'];
        }

        return $model;
    }
}
