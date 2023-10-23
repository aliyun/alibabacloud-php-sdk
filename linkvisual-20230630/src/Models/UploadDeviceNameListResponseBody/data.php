<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\UploadDeviceNameListResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UploadDeviceNameListResponseBody\data\invalidDetailList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var invalidDetailList[]
     */
    public $invalidDetailList;

    /**
     * @var string[]
     */
    public $invalidDeviceNameList;

    /**
     * @var string[]
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'batchId'                => 'BatchId',
        'invalidDetailList'      => 'InvalidDetailList',
        'invalidDeviceNameList'  => 'InvalidDeviceNameList',
        'repeatedDeviceNameList' => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = [];
            if (null !== $this->invalidDetailList && \is_array($this->invalidDetailList)) {
                $n = 0;
                foreach ($this->invalidDetailList as $item) {
                    $res['InvalidDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = $this->invalidDeviceNameList;
        }
        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = $this->repeatedDeviceNameList;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['InvalidDetailList'])) {
            if (!empty($map['InvalidDetailList'])) {
                $model->invalidDetailList = [];
                $n                        = 0;
                foreach ($map['InvalidDetailList'] as $item) {
                    $model->invalidDetailList[$n++] = null !== $item ? invalidDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvalidDeviceNameList'])) {
            if (!empty($map['InvalidDeviceNameList'])) {
                $model->invalidDeviceNameList = $map['InvalidDeviceNameList'];
            }
        }
        if (isset($map['RepeatedDeviceNameList'])) {
            if (!empty($map['RepeatedDeviceNameList'])) {
                $model->repeatedDeviceNameList = $map['RepeatedDeviceNameList'];
            }
        }

        return $model;
    }
}
