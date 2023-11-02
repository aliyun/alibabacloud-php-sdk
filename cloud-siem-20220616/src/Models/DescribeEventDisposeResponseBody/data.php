<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeResponseBody\data\receiverInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example { playbookName: "使用安全组封禁入方向IP", sophonTaskId: "400442a5-4f98-45ed-97db-5ab117eb0b8f", … }
     *
     * @var mixed[]
     */
    public $eventDispose;

    /**
     * @var receiverInfo
     */
    public $receiverInfo;

    /**
     * @example dealed
     *
     * @var string
     */
    public $remark;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'eventDispose' => 'EventDispose',
        'receiverInfo' => 'ReceiverInfo',
        'remark'       => 'Remark',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDispose) {
            $res['EventDispose'] = $this->eventDispose;
        }
        if (null !== $this->receiverInfo) {
            $res['ReceiverInfo'] = null !== $this->receiverInfo ? $this->receiverInfo->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EventDispose'])) {
            if (!empty($map['EventDispose'])) {
                $model->eventDispose = $map['EventDispose'];
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
