<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryBatchStatusResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryBatchStatusResponseBody\data\invalidDetailList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var invalidDetailList[]
     */
    public $invalidDetailList;

    /**
     * @var string[]
     */
    public $invalidList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $validList;
    protected $_name = [
        'invalidDetailList' => 'InvalidDetailList',
        'invalidList'       => 'InvalidList',
        'status'            => 'Status',
        'validList'         => 'ValidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = [];
            if (null !== $this->invalidDetailList && \is_array($this->invalidDetailList)) {
                $n = 0;
                foreach ($this->invalidDetailList as $item) {
                    $res['InvalidDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invalidList) {
            $res['InvalidList'] = $this->invalidList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validList) {
            $res['ValidList'] = $this->validList;
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
        if (isset($map['InvalidDetailList'])) {
            if (!empty($map['InvalidDetailList'])) {
                $model->invalidDetailList = [];
                $n                        = 0;
                foreach ($map['InvalidDetailList'] as $item) {
                    $model->invalidDetailList[$n++] = null !== $item ? invalidDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvalidList'])) {
            if (!empty($map['InvalidList'])) {
                $model->invalidList = $map['InvalidList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidList'])) {
            if (!empty($map['ValidList'])) {
                $model->validList = $map['ValidList'];
            }
        }

        return $model;
    }
}
