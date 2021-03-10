<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse\data\invalidList;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse\data\validList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var validList
     */
    public $validList;

    /**
     * @var invalidList
     */
    public $invalidList;
    protected $_name = [
        'status'      => 'Status',
        'validList'   => 'ValidList',
        'invalidList' => 'InvalidList',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('validList', $this->validList, true);
        Model::validateRequired('invalidList', $this->invalidList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validList) {
            $res['ValidList'] = null !== $this->validList ? $this->validList->toMap() : null;
        }
        if (null !== $this->invalidList) {
            $res['InvalidList'] = null !== $this->invalidList ? $this->invalidList->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidList'])) {
            $model->validList = validList::fromMap($map['ValidList']);
        }
        if (isset($map['InvalidList'])) {
            $model->invalidList = invalidList::fromMap($map['InvalidList']);
        }

        return $model;
    }
}
