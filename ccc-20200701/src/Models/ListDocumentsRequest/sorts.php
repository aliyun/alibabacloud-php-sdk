<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsRequest;

use AlibabaCloud\Dara\Model;

class sorts extends Model
{
    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $propertyName;
    protected $_name = [
        'order' => 'Order',
        'propertyName' => 'PropertyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        return $model;
    }
}
