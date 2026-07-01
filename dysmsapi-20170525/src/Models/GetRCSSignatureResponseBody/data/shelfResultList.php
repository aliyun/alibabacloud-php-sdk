<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody\data\shelfResultList\shelfStatusReasons;

class shelfResultList extends Model
{
    /**
     * @var string
     */
    public $operatorCode;

    /**
     * @var int
     */
    public $productType;

    /**
     * @var int
     */
    public $shelfStatus;

    /**
     * @var shelfStatusReasons[]
     */
    public $shelfStatusReasons;
    protected $_name = [
        'operatorCode' => 'OperatorCode',
        'productType' => 'ProductType',
        'shelfStatus' => 'ShelfStatus',
        'shelfStatusReasons' => 'ShelfStatusReasons',
    ];

    public function validate()
    {
        if (\is_array($this->shelfStatusReasons)) {
            Model::validateArray($this->shelfStatusReasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operatorCode) {
            $res['OperatorCode'] = $this->operatorCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->shelfStatus) {
            $res['ShelfStatus'] = $this->shelfStatus;
        }

        if (null !== $this->shelfStatusReasons) {
            if (\is_array($this->shelfStatusReasons)) {
                $res['ShelfStatusReasons'] = [];
                $n1 = 0;
                foreach ($this->shelfStatusReasons as $item1) {
                    $res['ShelfStatusReasons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperatorCode'])) {
            $model->operatorCode = $map['OperatorCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ShelfStatus'])) {
            $model->shelfStatus = $map['ShelfStatus'];
        }

        if (isset($map['ShelfStatusReasons'])) {
            if (!empty($map['ShelfStatusReasons'])) {
                $model->shelfStatusReasons = [];
                $n1 = 0;
                foreach ($map['ShelfStatusReasons'] as $item1) {
                    $model->shelfStatusReasons[$n1] = shelfStatusReasons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
