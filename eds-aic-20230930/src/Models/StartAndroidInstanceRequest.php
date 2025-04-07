<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class StartAndroidInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var string
     */
    public $saleMode;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'saleMode' => 'SaleMode',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIds)) {
            Model::validateArray($this->androidInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            if (\is_array($this->androidInstanceIds)) {
                $res['AndroidInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceIds as $item1) {
                    $res['AndroidInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
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
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceIds'] as $item1) {
                    $model->androidInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        return $model;
    }
}
