<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTableGenerationsResponseBody\result;

class ListTableGenerationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result' => 'result',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
