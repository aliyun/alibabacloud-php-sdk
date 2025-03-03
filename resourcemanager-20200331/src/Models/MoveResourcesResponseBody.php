<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveResourcesResponseBody\responses;

class MoveResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var responses[]
     */
    public $responses;
    protected $_name = [
        'requestId' => 'RequestId',
        'responses' => 'Responses',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->responses) {
            if (\is_array($this->responses)) {
                $res['Responses'] = [];
                $n1               = 0;
                foreach ($this->responses as $item1) {
                    $res['Responses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Responses'])) {
            if (!empty($map['Responses'])) {
                $model->responses = [];
                $n1               = 0;
                foreach ($map['Responses'] as $item1) {
                    $model->responses[$n1++] = responses::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
