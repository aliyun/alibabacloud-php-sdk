<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;
use AlibabaCloud\Tea\Model;

class DescribeRestoreOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreOrderDO
     */
    public $restoreOrderDO;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'      => 'RequestId',
        'restoreOrderDO' => 'RestoreOrderDO',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreOrderDO) {
            $res['RestoreOrderDO'] = null !== $this->restoreOrderDO ? $this->restoreOrderDO->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreOrderDO'])) {
            $model->restoreOrderDO = restoreOrderDO::fromMap($map['RestoreOrderDO']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
