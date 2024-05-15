<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsRequest;

use AlibabaCloud\Tea\Model;

class sorts extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example name
     *
     * @var string
     */
    public $propertyName;
    protected $_name = [
        'order'        => 'Order',
        'propertyName' => 'PropertyName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sorts
     */
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
