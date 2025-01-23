<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ACS extends Model
{
    /**
     * @var string
     */
    public $ACSQuotaId;
    /**
     * @var string[]
     */
    public $associatedProducts;
    protected $_name = [
        'ACSQuotaId'         => 'ACSQuotaId',
        'associatedProducts' => 'AssociatedProducts',
    ];

    public function validate()
    {
        if (\is_array($this->associatedProducts)) {
            Model::validateArray($this->associatedProducts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ACSQuotaId) {
            $res['ACSQuotaId'] = $this->ACSQuotaId;
        }

        if (null !== $this->associatedProducts) {
            if (\is_array($this->associatedProducts)) {
                $res['AssociatedProducts'] = [];
                $n1                        = 0;
                foreach ($this->associatedProducts as $item1) {
                    $res['AssociatedProducts'][$n1++] = $item1;
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
        if (isset($map['ACSQuotaId'])) {
            $model->ACSQuotaId = $map['ACSQuotaId'];
        }

        if (isset($map['AssociatedProducts'])) {
            if (!empty($map['AssociatedProducts'])) {
                $model->associatedProducts = [];
                $n1                        = 0;
                foreach ($map['AssociatedProducts'] as $item1) {
                    $model->associatedProducts[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
