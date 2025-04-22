<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\BatchResponseBody\responses;

class BatchResponseBody extends Model
{
    /**
     * @var responses[]
     */
    public $responses;
    protected $_name = [
        'responses' => 'responses',
    ];

    public function validate()
    {
        if (\is_array($this->responses)) {
            Model::validateArray($this->responses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->responses) {
            if (\is_array($this->responses)) {
                $res['responses'] = [];
                $n1 = 0;
                foreach ($this->responses as $item1) {
                    $res['responses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['responses'])) {
            if (!empty($map['responses'])) {
                $model->responses = [];
                $n1 = 0;
                foreach ($map['responses'] as $item1) {
                    $model->responses[$n1++] = responses::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
