<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcInvestmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @example 915203285993854016
     *
     * @var string
     */
    public $investCreditCode;

    /**
     * @example 2012-07-01
     *
     * @var string
     */
    public $investEsDate;

    /**
     * @var string
     */
    public $investLegalName;

    /**
     * @example 520328000148889
     *
     * @var string
     */
    public $investLicenseNo;

    /**
     * @var string
     */
    public $investName;

    /**
     * @var string
     */
    public $investRegCap;

    /**
     * @var string
     */
    public $investStatus;

    /**
     * @var string
     */
    public $shouldCap;

    /**
     * @example 49.0%
     *
     * @var string
     */
    public $stockPercentage;
    protected $_name = [
        'entName'          => 'EntName',
        'investCreditCode' => 'InvestCreditCode',
        'investEsDate'     => 'InvestEsDate',
        'investLegalName'  => 'InvestLegalName',
        'investLicenseNo'  => 'InvestLicenseNo',
        'investName'       => 'InvestName',
        'investRegCap'     => 'InvestRegCap',
        'investStatus'     => 'InvestStatus',
        'shouldCap'        => 'ShouldCap',
        'stockPercentage'  => 'StockPercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->investCreditCode) {
            $res['InvestCreditCode'] = $this->investCreditCode;
        }
        if (null !== $this->investEsDate) {
            $res['InvestEsDate'] = $this->investEsDate;
        }
        if (null !== $this->investLegalName) {
            $res['InvestLegalName'] = $this->investLegalName;
        }
        if (null !== $this->investLicenseNo) {
            $res['InvestLicenseNo'] = $this->investLicenseNo;
        }
        if (null !== $this->investName) {
            $res['InvestName'] = $this->investName;
        }
        if (null !== $this->investRegCap) {
            $res['InvestRegCap'] = $this->investRegCap;
        }
        if (null !== $this->investStatus) {
            $res['InvestStatus'] = $this->investStatus;
        }
        if (null !== $this->shouldCap) {
            $res['ShouldCap'] = $this->shouldCap;
        }
        if (null !== $this->stockPercentage) {
            $res['StockPercentage'] = $this->stockPercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['InvestCreditCode'])) {
            $model->investCreditCode = $map['InvestCreditCode'];
        }
        if (isset($map['InvestEsDate'])) {
            $model->investEsDate = $map['InvestEsDate'];
        }
        if (isset($map['InvestLegalName'])) {
            $model->investLegalName = $map['InvestLegalName'];
        }
        if (isset($map['InvestLicenseNo'])) {
            $model->investLicenseNo = $map['InvestLicenseNo'];
        }
        if (isset($map['InvestName'])) {
            $model->investName = $map['InvestName'];
        }
        if (isset($map['InvestRegCap'])) {
            $model->investRegCap = $map['InvestRegCap'];
        }
        if (isset($map['InvestStatus'])) {
            $model->investStatus = $map['InvestStatus'];
        }
        if (isset($map['ShouldCap'])) {
            $model->shouldCap = $map['ShouldCap'];
        }
        if (isset($map['StockPercentage'])) {
            $model->stockPercentage = $map['StockPercentage'];
        }

        return $model;
    }
}
