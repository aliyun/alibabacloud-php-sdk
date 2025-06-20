<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;

class QueryCustomerRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string[]
     */
    public $product;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'product' => 'Product',
        'reqTimestamp' => 'ReqTimestamp',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->product)) {
            Model::validateArray($this->product);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->product) {
            if (\is_array($this->product)) {
                $res['Product'] = [];
                $n1 = 0;
                foreach ($this->product as $item1) {
                    $res['Product'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['Product'])) {
            if (!empty($map['Product'])) {
                $model->product = [];
                $n1 = 0;
                foreach ($map['Product'] as $item1) {
                    $model->product[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
