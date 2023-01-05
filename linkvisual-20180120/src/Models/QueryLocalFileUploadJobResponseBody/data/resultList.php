<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobResponseBody\data;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobResponseBody\data\resultList\fileList;
use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @example 9201
     *
     * @var int
     */
    public $code;

    /**
     * @example gb_hik_IPC
     *
     * @var string
     */
    public $deviceName;

    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @example IQ9mO4tvMnAj****QUdcg2n400
     *
     * @var string
     */
    public $iotId;

    /**
     * @example g2****Q6ggK
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1634746054
     *
     * @var int
     */
    public $slotEndTime;

    /**
     * @example 1634745754
     *
     * @var int
     */
    public $slotStartTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $slotStatus;
    protected $_name = [
        'code'          => 'Code',
        'deviceName'    => 'DeviceName',
        'fileList'      => 'FileList',
        'iotId'         => 'IotId',
        'productKey'    => 'ProductKey',
        'slotEndTime'   => 'SlotEndTime',
        'slotStartTime' => 'SlotStartTime',
        'slotStatus'    => 'SlotStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->slotEndTime) {
            $res['SlotEndTime'] = $this->slotEndTime;
        }
        if (null !== $this->slotStartTime) {
            $res['SlotStartTime'] = $this->slotStartTime;
        }
        if (null !== $this->slotStatus) {
            $res['SlotStatus'] = $this->slotStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SlotEndTime'])) {
            $model->slotEndTime = $map['SlotEndTime'];
        }
        if (isset($map['SlotStartTime'])) {
            $model->slotStartTime = $map['SlotStartTime'];
        }
        if (isset($map['SlotStatus'])) {
            $model->slotStatus = $map['SlotStatus'];
        }

        return $model;
    }
}
