<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var results\results[]
     */
    public $results;
    protected $_name = [
        'results' => 'Results',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1] = results\results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
