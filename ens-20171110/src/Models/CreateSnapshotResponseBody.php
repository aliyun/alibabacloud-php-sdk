<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateSnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $snapShotId;
    protected $_name = [
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
        'snapShotId' => 'SnapShotId',
    ];

    public function validate()
    {
        if (\is_array($this->snapShotId)) {
            Model::validateArray($this->snapShotId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapShotId) {
            if (\is_array($this->snapShotId)) {
                $res['SnapShotId'] = [];
                $n1 = 0;
                foreach ($this->snapShotId as $item1) {
                    $res['SnapShotId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SnapShotId'])) {
            if (!empty($map['SnapShotId'])) {
                $model->snapShotId = [];
                $n1 = 0;
                foreach ($map['SnapShotId'] as $item1) {
                    $model->snapShotId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
