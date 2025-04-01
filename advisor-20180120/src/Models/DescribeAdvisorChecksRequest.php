<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeAdvisorChecksRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'language' => 'Language',
        'product' => 'Product',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
