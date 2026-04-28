<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryResponseBody\result\memory\results;

class memory extends Model
{
    /**
     * @var results[]
     */
    public $results;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'results' => 'results',
        'total' => 'total',
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
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
