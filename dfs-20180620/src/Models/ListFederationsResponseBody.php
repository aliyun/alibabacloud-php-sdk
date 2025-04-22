<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFederationsResponseBody\federations;

class ListFederationsResponseBody extends Model
{
    /**
     * @var federations[]
     */
    public $federations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'federations' => 'Federations',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->federations)) {
            Model::validateArray($this->federations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->federations) {
            if (\is_array($this->federations)) {
                $res['Federations'] = [];
                $n1 = 0;
                foreach ($this->federations as $item1) {
                    $res['Federations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Federations'])) {
            if (!empty($map['Federations'])) {
                $model->federations = [];
                $n1 = 0;
                foreach ($map['Federations'] as $item1) {
                    $model->federations[$n1++] = federations::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
