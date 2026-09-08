<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GlobalSpotPriceItem extends Model
{
    /**
     * @var string
     */
    public $effectiveAt;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $spotDiscount;
    protected $_name = [
        'effectiveAt' => 'effectiveAt',
        'instanceType' => 'instanceType',
        'spotDiscount' => 'spotDiscount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveAt) {
            $res['effectiveAt'] = $this->effectiveAt;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->spotDiscount) {
            $res['spotDiscount'] = $this->spotDiscount;
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
        if (isset($map['effectiveAt'])) {
            $model->effectiveAt = $map['effectiveAt'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['spotDiscount'])) {
            $model->spotDiscount = $map['spotDiscount'];
        }

        return $model;
    }
}
