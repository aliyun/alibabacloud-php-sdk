<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagKeysResponseBody;

use AlibabaCloud\Dara\Model;

class keys extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'category' => 'Category',
        'key'      => 'Key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
