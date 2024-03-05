<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class appointments extends Model
{
    /**
     * @var int
     */
    public $huhangId;

    /**
     * @var int
     */
    public $purchaseCode;

    /**
     * @var string
     */
    public $purchaseDesc;

    /**
     * @var int
     */
    public $supportDays;

    /**
     * @var int
     */
    public $travelDays;
    protected $_name = [
        'huhangId'     => 'huhangId',
        'purchaseCode' => 'purchaseCode',
        'purchaseDesc' => 'purchaseDesc',
        'supportDays'  => 'supportDays',
        'travelDays'   => 'travelDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->huhangId) {
            $res['huhangId'] = $this->huhangId;
        }
        if (null !== $this->purchaseCode) {
            $res['purchaseCode'] = $this->purchaseCode;
        }
        if (null !== $this->purchaseDesc) {
            $res['purchaseDesc'] = $this->purchaseDesc;
        }
        if (null !== $this->supportDays) {
            $res['supportDays'] = $this->supportDays;
        }
        if (null !== $this->travelDays) {
            $res['travelDays'] = $this->travelDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appointments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['huhangId'])) {
            $model->huhangId = $map['huhangId'];
        }
        if (isset($map['purchaseCode'])) {
            $model->purchaseCode = $map['purchaseCode'];
        }
        if (isset($map['purchaseDesc'])) {
            $model->purchaseDesc = $map['purchaseDesc'];
        }
        if (isset($map['supportDays'])) {
            $model->supportDays = $map['supportDays'];
        }
        if (isset($map['travelDays'])) {
            $model->travelDays = $map['travelDays'];
        }

        return $model;
    }
}
