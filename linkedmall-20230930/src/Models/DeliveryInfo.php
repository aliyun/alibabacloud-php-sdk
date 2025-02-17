<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeliveryInfo extends Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $postFee;
    /**
     * @var int
     */
    public $serviceType;
    protected $_name = [
        'displayName' => 'displayName',
        'id'          => 'id',
        'postFee'     => 'postFee',
        'serviceType' => 'serviceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->postFee) {
            $res['postFee'] = $this->postFee;
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['postFee'])) {
            $model->postFee = $map['postFee'];
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        return $model;
    }
}
