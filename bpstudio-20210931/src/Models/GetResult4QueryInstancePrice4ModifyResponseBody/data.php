<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponseBody\data\priceList;

class data extends Model
{
    /**
     * @var priceList[]
     */
    public $priceList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'priceList' => 'PriceList',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->priceList)) {
            Model::validateArray($this->priceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceList) {
            if (\is_array($this->priceList)) {
                $res['PriceList'] = [];
                $n1 = 0;
                foreach ($this->priceList as $item1) {
                    $res['PriceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceList'])) {
            if (!empty($map['PriceList'])) {
                $model->priceList = [];
                $n1 = 0;
                foreach ($map['PriceList'] as $item1) {
                    $model->priceList[$n1++] = priceList::fromMap($item1);
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
