<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeResponseBody\data\receiverInfo;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $eventDispose;

    /**
     * @var receiverInfo
     */
    public $receiverInfo;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'eventDispose' => 'EventDispose',
        'receiverInfo' => 'ReceiverInfo',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->eventDispose)) {
            Model::validateArray($this->eventDispose);
        }
        if (null !== $this->receiverInfo) {
            $this->receiverInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventDispose) {
            if (\is_array($this->eventDispose)) {
                $res['EventDispose'] = [];
                $n1 = 0;
                foreach ($this->eventDispose as $item1) {
                    $res['EventDispose'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receiverInfo) {
            $res['ReceiverInfo'] = null !== $this->receiverInfo ? $this->receiverInfo->toArray($noStream) : $this->receiverInfo;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EventDispose'])) {
            if (!empty($map['EventDispose'])) {
                $model->eventDispose = [];
                $n1 = 0;
                foreach ($map['EventDispose'] as $item1) {
                    $model->eventDispose[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReceiverInfo'])) {
            $model->receiverInfo = receiverInfo::fromMap($map['ReceiverInfo']);
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
