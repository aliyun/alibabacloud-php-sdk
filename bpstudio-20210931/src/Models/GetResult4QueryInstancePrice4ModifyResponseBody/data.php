<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponseBody;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponseBody\data\priceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var priceList[]
     */
    public $priceList;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example d9a3e99b-6954-4a16-ad51-954db4a528b7
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'priceList' => 'PriceList',
        'status'    => 'Status',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceList) {
            $res['PriceList'] = [];
            if (null !== $this->priceList && \is_array($this->priceList)) {
                $n = 0;
                foreach ($this->priceList as $item) {
                    $res['PriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['PriceList'])) {
            if (!empty($map['PriceList'])) {
                $model->priceList = [];
                $n                = 0;
                foreach ($map['PriceList'] as $item) {
                    $model->priceList[$n++] = null !== $item ? priceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
