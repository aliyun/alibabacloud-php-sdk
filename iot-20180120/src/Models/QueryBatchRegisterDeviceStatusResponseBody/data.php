<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\invalidList;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\validList;

class data extends Model
{
    /**
     * @var invalidDetailList
     */
    public $invalidDetailList;

    /**
     * @var invalidList
     */
    public $invalidList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var validList
     */
    public $validList;
    protected $_name = [
        'invalidDetailList' => 'InvalidDetailList',
        'invalidList' => 'InvalidList',
        'status' => 'Status',
        'validList' => 'ValidList',
    ];

    public function validate()
    {
        if (null !== $this->invalidDetailList) {
            $this->invalidDetailList->validate();
        }
        if (null !== $this->invalidList) {
            $this->invalidList->validate();
        }
        if (null !== $this->validList) {
            $this->validList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = null !== $this->invalidDetailList ? $this->invalidDetailList->toArray($noStream) : $this->invalidDetailList;
        }

        if (null !== $this->invalidList) {
            $res['InvalidList'] = null !== $this->invalidList ? $this->invalidList->toArray($noStream) : $this->invalidList;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->validList) {
            $res['ValidList'] = null !== $this->validList ? $this->validList->toArray($noStream) : $this->validList;
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
        if (isset($map['InvalidDetailList'])) {
            $model->invalidDetailList = invalidDetailList::fromMap($map['InvalidDetailList']);
        }

        if (isset($map['InvalidList'])) {
            $model->invalidList = invalidList::fromMap($map['InvalidList']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ValidList'])) {
            $model->validList = validList::fromMap($map['ValidList']);
        }

        return $model;
    }
}
