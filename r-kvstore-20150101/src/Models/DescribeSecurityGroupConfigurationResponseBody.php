<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupConfigurationResponseBody extends Model
{
    /**
     * @description The network type of the security group. Valid values:
     *
     *   **classic**: the classic network.
     *   **vpc**: the virtual private cloud (VPC).
     *
     * @var items
     */
    public $items;

    /**
     * @description The ID of the security group.
     *
     * @example 981C0D6A-D9DD-466C-92DA-F29DF755****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items'     => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DescribeSecurityGroupConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
