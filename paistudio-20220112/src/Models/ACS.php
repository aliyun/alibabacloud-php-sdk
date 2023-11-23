<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACSQuotaId) {
            $res['ACSQuotaId'] = $this->ACSQuotaId;
        }
        if (null !== $this->associatedProducts) {
            $res['AssociatedProducts'] = $this->associatedProducts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ACS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ACSQuotaId'])) {
            $model->ACSQuotaId = $map['ACSQuotaId'];
        }
        if (isset($map['AssociatedProducts'])) {
            if (!empty($map['AssociatedProducts'])) {
                $model->associatedProducts = $map['AssociatedProducts'];
            }
        }

        return $model;
    }
}
