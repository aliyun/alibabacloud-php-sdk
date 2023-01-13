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
     * @var invalidList
     */
    public $invalidList;

    /**
     * @var validList
     */
    public $validList;
    protected $_name = [
        'status'      => 'Status',
        'invalidList' => 'InvalidList',
        'validList'   => 'ValidList',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('invalidList', $this->invalidList, true);
        Model::validateRequired('validList', $this->validList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->invalidList) {
            $res['InvalidList'] = null !== $this->invalidList ? $this->invalidList->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InvalidList'])) {
            $model->invalidList = invalidList::fromMap($map['InvalidList']);
        }
        if (isset($map['ValidList'])) {
            $model->validList = validList::fromMap($map['ValidList']);
        }

        return $model;
    }
}
