<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesResponseBody\perspectives;

class QueryPerspectivesResponseBody extends Model
{
    /**
     * @var perspectives[]
     */
    public $perspectives;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'perspectives' => 'Perspectives',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->perspectives)) {
            Model::validateArray($this->perspectives);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->perspectives) {
            if (\is_array($this->perspectives)) {
                $res['Perspectives'] = [];
                $n1 = 0;
                foreach ($this->perspectives as $item1) {
                    $res['Perspectives'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Perspectives'])) {
            if (!empty($map['Perspectives'])) {
                $model->perspectives = [];
                $n1 = 0;
                foreach ($map['Perspectives'] as $item1) {
                    $model->perspectives[$n1] = perspectives::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
