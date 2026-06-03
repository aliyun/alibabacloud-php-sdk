<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\QueryDictDataItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dypns\V20170620\Models\QueryDictDataItemResponseBody\data\subListData;

class data extends Model
{
    /**
     * @var string
     */
    public $classifyItemCode;

    /**
     * @var string
     */
    public $classifyItemValue;

    /**
     * @var string
     */
    public $dataItemCode;

    /**
     * @var int
     */
    public $dataItemOrder;

    /**
     * @var string
     */
    public $dataItemParent;

    /**
     * @var string
     */
    public $dataItemValue;

    /**
     * @var int
     */
    public $itemType;

    /**
     * @var subListData[]
     */
    public $subListData;
    protected $_name = [
        'classifyItemCode' => 'ClassifyItemCode',
        'classifyItemValue' => 'ClassifyItemValue',
        'dataItemCode' => 'DataItemCode',
        'dataItemOrder' => 'DataItemOrder',
        'dataItemParent' => 'DataItemParent',
        'dataItemValue' => 'DataItemValue',
        'itemType' => 'ItemType',
        'subListData' => 'SubListData',
    ];

    public function validate()
    {
        if (\is_array($this->subListData)) {
            Model::validateArray($this->subListData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classifyItemCode) {
            $res['ClassifyItemCode'] = $this->classifyItemCode;
        }

        if (null !== $this->classifyItemValue) {
            $res['ClassifyItemValue'] = $this->classifyItemValue;
        }

        if (null !== $this->dataItemCode) {
            $res['DataItemCode'] = $this->dataItemCode;
        }

        if (null !== $this->dataItemOrder) {
            $res['DataItemOrder'] = $this->dataItemOrder;
        }

        if (null !== $this->dataItemParent) {
            $res['DataItemParent'] = $this->dataItemParent;
        }

        if (null !== $this->dataItemValue) {
            $res['DataItemValue'] = $this->dataItemValue;
        }

        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }

        if (null !== $this->subListData) {
            if (\is_array($this->subListData)) {
                $res['SubListData'] = [];
                $n1 = 0;
                foreach ($this->subListData as $item1) {
                    $res['SubListData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClassifyItemCode'])) {
            $model->classifyItemCode = $map['ClassifyItemCode'];
        }

        if (isset($map['ClassifyItemValue'])) {
            $model->classifyItemValue = $map['ClassifyItemValue'];
        }

        if (isset($map['DataItemCode'])) {
            $model->dataItemCode = $map['DataItemCode'];
        }

        if (isset($map['DataItemOrder'])) {
            $model->dataItemOrder = $map['DataItemOrder'];
        }

        if (isset($map['DataItemParent'])) {
            $model->dataItemParent = $map['DataItemParent'];
        }

        if (isset($map['DataItemValue'])) {
            $model->dataItemValue = $map['DataItemValue'];
        }

        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }

        if (isset($map['SubListData'])) {
            if (!empty($map['SubListData'])) {
                $model->subListData = [];
                $n1 = 0;
                foreach ($map['SubListData'] as $item1) {
                    $model->subListData[$n1] = subListData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
