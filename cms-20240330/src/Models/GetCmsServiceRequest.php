<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetCmsServiceRequest extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'product' => 'product',
        'service' => 'service',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->service) {
            $res['service'] = $this->service;
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
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['service'])) {
            $model->service = $map['service'];
        }

        return $model;
    }
}
