<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;
use AlibabaCloud\Tea\Model;

class DescribeRestoreOrderResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreOrderDO
     */
    public $restoreOrderDO;
    protected $_name = [
        'success'        => 'Success',
        'requestId'      => 'RequestId',
        'restoreOrderDO' => 'RestoreOrderDO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreOrderDO) {
            $res['RestoreOrderDO'] = null !== $this->restoreOrderDO ? $this->restoreOrderDO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreOrderDO'])) {
            $model->restoreOrderDO = restoreOrderDO::fromMap($map['RestoreOrderDO']);
        }

        return $model;
    }
}
