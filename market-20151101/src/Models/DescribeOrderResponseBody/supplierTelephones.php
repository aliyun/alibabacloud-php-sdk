<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderResponseBody;

use AlibabaCloud\Tea\Model;

class supplierTelephones extends Model
{
    /**
     * @var string[]
     */
    public $telephone;
    protected $_name = [
        'telephone' => 'Telephone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplierTelephones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Telephone'])) {
            if (!empty($map['Telephone'])) {
                $model->telephone = $map['Telephone'];
            }
        }

        return $model;
    }
}
