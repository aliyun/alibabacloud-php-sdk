<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CombineLoaRequest extends Model
{
    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $tmProduceType;

    /**
     * @var int
     */
    public $principalName;
    protected $_name = [
        'materialId'    => 'MaterialId',
        'trademarkName' => 'TrademarkName',
        'materialName'  => 'MaterialName',
        'nationality'   => 'Nationality',
        'address'       => 'Address',
        'tmProduceType' => 'TmProduceType',
        'principalName' => 'PrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->tmProduceType) {
            $res['TmProduceType'] = $this->tmProduceType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CombineLoaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TmProduceType'])) {
            $model->tmProduceType = $map['TmProduceType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }

        return $model;
    }
}
