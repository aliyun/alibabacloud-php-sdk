<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\TransferDeviceInstanceResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TransferDeviceInstanceResponseBody\data\failedList;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TransferDeviceInstanceResponseBody\data\successList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var failedList[]
     */
    public $failedList;

    /**
     * @var successList[]
     */
    public $successList;
    protected $_name = [
        'failedList'  => 'FailedList',
        'successList' => 'SuccessList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedList) {
            $res['FailedList'] = [];
            if (null !== $this->failedList && \is_array($this->failedList)) {
                $n = 0;
                foreach ($this->failedList as $item) {
                    $res['FailedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successList) {
            $res['SuccessList'] = [];
            if (null !== $this->successList && \is_array($this->successList)) {
                $n = 0;
                foreach ($this->successList as $item) {
                    $res['SuccessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FailedList'])) {
            if (!empty($map['FailedList'])) {
                $model->failedList = [];
                $n                 = 0;
                foreach ($map['FailedList'] as $item) {
                    $model->failedList[$n++] = null !== $item ? failedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuccessList'])) {
            if (!empty($map['SuccessList'])) {
                $model->successList = [];
                $n                  = 0;
                foreach ($map['SuccessList'] as $item) {
                    $model->successList[$n++] = null !== $item ? successList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
