<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody\data\registerResultList\registerStatusReasons;

class registerResultList extends Model
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
     * @var string
     */
    public $registerCompleteTime;

    /**
     * @var int
     */
    public $registerStatus;

    /**
     * @var registerStatusReasons[]
     */
    public $registerStatusReasons;
    protected $_name = [
        'operatorCode' => 'OperatorCode',
        'productType' => 'ProductType',
        'registerCompleteTime' => 'RegisterCompleteTime',
        'registerStatus' => 'RegisterStatus',
        'registerStatusReasons' => 'RegisterStatusReasons',
    ];

    public function validate()
    {
        if (\is_array($this->registerStatusReasons)) {
            Model::validateArray($this->registerStatusReasons);
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

        if (null !== $this->registerCompleteTime) {
            $res['RegisterCompleteTime'] = $this->registerCompleteTime;
        }

        if (null !== $this->registerStatus) {
            $res['RegisterStatus'] = $this->registerStatus;
        }

        if (null !== $this->registerStatusReasons) {
            if (\is_array($this->registerStatusReasons)) {
                $res['RegisterStatusReasons'] = [];
                $n1 = 0;
                foreach ($this->registerStatusReasons as $item1) {
                    $res['RegisterStatusReasons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RegisterCompleteTime'])) {
            $model->registerCompleteTime = $map['RegisterCompleteTime'];
        }

        if (isset($map['RegisterStatus'])) {
            $model->registerStatus = $map['RegisterStatus'];
        }

        if (isset($map['RegisterStatusReasons'])) {
            if (!empty($map['RegisterStatusReasons'])) {
                $model->registerStatusReasons = [];
                $n1 = 0;
                foreach ($map['RegisterStatusReasons'] as $item1) {
                    $model->registerStatusReasons[$n1] = registerStatusReasons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
