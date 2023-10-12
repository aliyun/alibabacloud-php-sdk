<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\Module\moduleDetails;

use AlibabaCloud\Tea\Model;

class deviceDetails extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $orderNumber;
    protected $_name = [
        'orderNumber' => 'OrderNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        return $model;
    }
}
