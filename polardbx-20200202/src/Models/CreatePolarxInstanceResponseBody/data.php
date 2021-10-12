<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePolarxInstanceResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePolarxInstanceResponseBody\data\drdsInstanceIdList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var drdsInstanceIdList
     */
    public $drdsInstanceIdList;
    protected $_name = [
        'orderId'            => 'OrderId',
        'drdsInstanceIdList' => 'DrdsInstanceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->drdsInstanceIdList) {
            $res['DrdsInstanceIdList'] = null !== $this->drdsInstanceIdList ? $this->drdsInstanceIdList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['DrdsInstanceIdList'])) {
            $model->drdsInstanceIdList = drdsInstanceIdList::fromMap($map['DrdsInstanceIdList']);
        }

        return $model;
    }
}
