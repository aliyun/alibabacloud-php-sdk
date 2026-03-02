<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeProductListResult extends Model
{
    /**
     * @var ProductInfo[]
     */
    public $authorizedProductList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'authorizedProductList' => 'authorizedProductList',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedProductList)) {
            Model::validateArray($this->authorizedProductList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedProductList) {
            if (\is_array($this->authorizedProductList)) {
                $res['authorizedProductList'] = [];
                $n1 = 0;
                foreach ($this->authorizedProductList as $item1) {
                    $res['authorizedProductList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['authorizedProductList'])) {
            if (!empty($map['authorizedProductList'])) {
                $model->authorizedProductList = [];
                $n1 = 0;
                foreach ($map['authorizedProductList'] as $item1) {
                    $model->authorizedProductList[$n1] = ProductInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
