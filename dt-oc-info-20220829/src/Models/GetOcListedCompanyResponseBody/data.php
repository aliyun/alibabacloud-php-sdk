<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcListedCompanyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 140.68
     *
     * @var string
     */
    public $circulationMarketValue;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example Chengdu CORPRO Technology Co.,Ltd.
     *
     * @var string
     */
    public $entNameEng;

    /**
     * @example 2010-08-06
     *
     * @var string
     */
    public $listDate;

    /**
     * @example 300101
     *
     * @var string
     */
    public $securitiesCode;

    /**
     * @var string
     */
    public $securitiesMarket;

    /**
     * @var string
     */
    public $securitiesName;

    /**
     * @example 55721
     *
     * @var string
     */
    public $totalFlowShares;

    /**
     * @example 56007
     *
     * @var string
     */
    public $totalShares;
    protected $_name = [
        'circulationMarketValue' => 'CirculationMarketValue',
        'entName'                => 'EntName',
        'entNameEng'             => 'EntNameEng',
        'listDate'               => 'ListDate',
        'securitiesCode'         => 'SecuritiesCode',
        'securitiesMarket'       => 'SecuritiesMarket',
        'securitiesName'         => 'SecuritiesName',
        'totalFlowShares'        => 'TotalFlowShares',
        'totalShares'            => 'TotalShares',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->circulationMarketValue) {
            $res['CirculationMarketValue'] = $this->circulationMarketValue;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->entNameEng) {
            $res['EntNameEng'] = $this->entNameEng;
        }
        if (null !== $this->listDate) {
            $res['ListDate'] = $this->listDate;
        }
        if (null !== $this->securitiesCode) {
            $res['SecuritiesCode'] = $this->securitiesCode;
        }
        if (null !== $this->securitiesMarket) {
            $res['SecuritiesMarket'] = $this->securitiesMarket;
        }
        if (null !== $this->securitiesName) {
            $res['SecuritiesName'] = $this->securitiesName;
        }
        if (null !== $this->totalFlowShares) {
            $res['TotalFlowShares'] = $this->totalFlowShares;
        }
        if (null !== $this->totalShares) {
            $res['TotalShares'] = $this->totalShares;
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
        if (isset($map['CirculationMarketValue'])) {
            $model->circulationMarketValue = $map['CirculationMarketValue'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['EntNameEng'])) {
            $model->entNameEng = $map['EntNameEng'];
        }
        if (isset($map['ListDate'])) {
            $model->listDate = $map['ListDate'];
        }
        if (isset($map['SecuritiesCode'])) {
            $model->securitiesCode = $map['SecuritiesCode'];
        }
        if (isset($map['SecuritiesMarket'])) {
            $model->securitiesMarket = $map['SecuritiesMarket'];
        }
        if (isset($map['SecuritiesName'])) {
            $model->securitiesName = $map['SecuritiesName'];
        }
        if (isset($map['TotalFlowShares'])) {
            $model->totalFlowShares = $map['TotalFlowShares'];
        }
        if (isset($map['TotalShares'])) {
            $model->totalShares = $map['TotalShares'];
        }

        return $model;
    }
}
