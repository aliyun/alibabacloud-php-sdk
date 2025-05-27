<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DataProductListLogMapValue;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList\logList;

class productList extends Model
{
    /**
     * @var logList[]
     */
    public $logList;

    /**
     * @var DataProductListLogMapValue[][]
     */
    public $logMap;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'logList' => 'LogList',
        'logMap' => 'LogMap',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
        if (\is_array($this->logList)) {
            Model::validateArray($this->logList);
        }
        if (\is_array($this->logMap)) {
            Model::validateArray($this->logMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logList) {
            if (\is_array($this->logList)) {
                $res['LogList'] = [];
                $n1 = 0;
                foreach ($this->logList as $item1) {
                    $res['LogList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logMap) {
            if (\is_array($this->logMap)) {
                $res['LogMap'] = [];
                foreach ($this->logMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['LogMap'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['LogMap'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
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
        if (isset($map['LogList'])) {
            if (!empty($map['LogList'])) {
                $model->logList = [];
                $n1 = 0;
                foreach ($map['LogList'] as $item1) {
                    $model->logList[$n1++] = logList::fromMap($item1);
                }
            }
        }

        if (isset($map['LogMap'])) {
            if (!empty($map['LogMap'])) {
                $model->logMap = [];
                foreach ($map['LogMap'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->logMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->logMap[$key1][$n2++] = DataProductListLogMapValue::fromMap($item2);
                        }
                    }
                }
            }
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
