<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalEmbeddingRequest\input;

class GetMultiModalEmbeddingRequest extends Model
{
    /**
     * @var input[]
     */
    public $input;
    protected $_name = [
        'input' => 'input',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    $res['input'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['input'] as $item1) {
                    $model->input[$n1++] = input::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
