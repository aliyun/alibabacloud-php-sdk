<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest;

use AlibabaCloud\Tea\Model;

class businessInfo extends Model
{
    /**
     * @var string[]
     */
    public $orderParams;
    protected $_name = [
        'orderParams' => 'OrderParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderParams) {
            $res['OrderParams'] = $this->orderParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderParams'])) {
            $model->orderParams = $map['OrderParams'];
        }

        return $model;
    }
}
