<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderRequest;

use AlibabaCloud\Tea\Model;

class serverlessConfig extends Model
{
    /**
     * @description The reserved capacity for publishing messages. You can specify only an integer for this parameter. Minimum value: 60.
     *
     * >  The actual maximum reserved capacity for publishing messages varies based on available resources in the region. The actual range displayed on the buy page shall prevail.
     * @example 60
     *
     * @var int
     */
    public $reservedPublishCapacity;

    /**
     * @description The reserved capacity for subscribing to messages. You can specify only an integer for this parameter. Minimum value: 20.
     *
     * >  The actual maximum reserved capacity for subscribing to messages varies based on available resources in the region. The actual range displayed on the buy page shall prevail.
     * @example 50
     *
     * @var int
     */
    public $reservedSubscribeCapacity;
    protected $_name = [
        'reservedPublishCapacity'   => 'ReservedPublishCapacity',
        'reservedSubscribeCapacity' => 'ReservedSubscribeCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedPublishCapacity) {
            $res['ReservedPublishCapacity'] = $this->reservedPublishCapacity;
        }
        if (null !== $this->reservedSubscribeCapacity) {
            $res['ReservedSubscribeCapacity'] = $this->reservedSubscribeCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverlessConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedPublishCapacity'])) {
            $model->reservedPublishCapacity = $map['ReservedPublishCapacity'];
        }
        if (isset($map['ReservedSubscribeCapacity'])) {
            $model->reservedSubscribeCapacity = $map['ReservedSubscribeCapacity'];
        }

        return $model;
    }
}
