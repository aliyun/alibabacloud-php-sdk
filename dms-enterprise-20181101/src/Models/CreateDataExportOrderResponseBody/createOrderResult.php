<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderResponseBody;

use AlibabaCloud\Dara\Model;

class createOrderResult extends Model
{
    /**
     * @var int[]
     */
    public $createOrderResult;
    protected $_name = [
        'createOrderResult' => 'CreateOrderResult',
    ];

    public function validate()
    {
        if (\is_array($this->createOrderResult)) {
            Model::validateArray($this->createOrderResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createOrderResult) {
            if (\is_array($this->createOrderResult)) {
                $res['CreateOrderResult'] = [];
                $n1 = 0;
                foreach ($this->createOrderResult as $item1) {
                    $res['CreateOrderResult'][$n1++] = $item1;
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
        if (isset($map['CreateOrderResult'])) {
            if (!empty($map['CreateOrderResult'])) {
                $model->createOrderResult = [];
                $n1 = 0;
                foreach ($map['CreateOrderResult'] as $item1) {
                    $model->createOrderResult[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
