<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\invalidList;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\validList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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
        'invalidList' => 'InvalidList',
        'status'      => 'Status',
        'validList'   => 'ValidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidList) {
            $res['InvalidList'] = null !== $this->invalidList ? $this->invalidList->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validList) {
            $res['ValidList'] = null !== $this->validList ? $this->validList->toMap() : null;
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
