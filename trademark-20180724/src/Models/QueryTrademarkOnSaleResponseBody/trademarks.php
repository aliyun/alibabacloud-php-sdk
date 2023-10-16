<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkOnSaleResponseBody;

use AlibabaCloud\Tea\Model;

class trademarks extends Model
{
    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tmType;

    /**
     * @var string
     */
    public $trademarkName;
    protected $_name = [
        'auditResult'        => 'AuditResult',
        'classification'     => 'Classification',
        'icon'               => 'Icon',
        'orderPrice'         => 'OrderPrice',
        'registrationNumber' => 'RegistrationNumber',
        'status'             => 'Status',
        'tmType'             => 'TmType',
        'trademarkName'      => 'TrademarkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tmType) {
            $res['TmType'] = $this->tmType;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TmType'])) {
            $model->tmType = $map['TmType'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
