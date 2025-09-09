<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

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
        'requestId' => 'RequestId',
        'restoreOrderDO' => 'RestoreOrderDO',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->restoreOrderDO) {
            $this->restoreOrderDO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restoreOrderDO) {
            $res['RestoreOrderDO'] = null !== $this->restoreOrderDO ? $this->restoreOrderDO->toArray($noStream) : $this->restoreOrderDO;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
