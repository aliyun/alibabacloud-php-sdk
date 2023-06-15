<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponseBody\items;
use AlibabaCloud\Tea\Model;

class ModifySecurityGroupConfigurationResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description An array that consists of ECS security groups.
     *
     * @var items
     */
    public $items;

    /**
     * @description The ID of the request.
     *
     * @example 8585861B-8F0D-4D17-9460-C42255EB10C0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'items'          => 'Items',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityGroupConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
