<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpTrademarkResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agent;

    /**
     * @example 2005-04-30
     *
     * @var string
     */
    public $applyDate;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 2008-09-27
     *
     * @var string
     */
    public $firstPubDate;

    /**
     * @example 1137
     *
     * @var string
     */
    public $firstPubNo;

    /**
     * @example https://qxb-img-osscache.qixin.com/official_trademark/af62332c79813d1283541b11a3da50da.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $period;

    /**
     * @example 4636939
     *
     * @var string
     */
    public $regNum;

    /**
     * @example 2008-12-28
     *
     * @var string
     */
    public $regPubDate;

    /**
     * @example 1149
     *
     * @var string
     */
    public $regPubNo;

    /**
     * @var string
     */
    public $trademarkForm;

    /**
     * @example CTTA
     *
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $trademarkStatus;

    /**
     * @var string
     */
    public $trademarkType;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'agent'           => 'Agent',
        'applyDate'       => 'ApplyDate',
        'entName'         => 'EntName',
        'firstPubDate'    => 'FirstPubDate',
        'firstPubNo'      => 'FirstPubNo',
        'imageUrl'        => 'ImageUrl',
        'period'          => 'Period',
        'regNum'          => 'RegNum',
        'regPubDate'      => 'RegPubDate',
        'regPubNo'        => 'RegPubNo',
        'trademarkForm'   => 'TrademarkForm',
        'trademarkName'   => 'TrademarkName',
        'trademarkStatus' => 'TrademarkStatus',
        'trademarkType'   => 'TrademarkType',
        'typeName'        => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->firstPubDate) {
            $res['FirstPubDate'] = $this->firstPubDate;
        }
        if (null !== $this->firstPubNo) {
            $res['FirstPubNo'] = $this->firstPubNo;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regNum) {
            $res['RegNum'] = $this->regNum;
        }
        if (null !== $this->regPubDate) {
            $res['RegPubDate'] = $this->regPubDate;
        }
        if (null !== $this->regPubNo) {
            $res['RegPubNo'] = $this->regPubNo;
        }
        if (null !== $this->trademarkForm) {
            $res['TrademarkForm'] = $this->trademarkForm;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->trademarkStatus) {
            $res['TrademarkStatus'] = $this->trademarkStatus;
        }
        if (null !== $this->trademarkType) {
            $res['TrademarkType'] = $this->trademarkType;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['FirstPubDate'])) {
            $model->firstPubDate = $map['FirstPubDate'];
        }
        if (isset($map['FirstPubNo'])) {
            $model->firstPubNo = $map['FirstPubNo'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegNum'])) {
            $model->regNum = $map['RegNum'];
        }
        if (isset($map['RegPubDate'])) {
            $model->regPubDate = $map['RegPubDate'];
        }
        if (isset($map['RegPubNo'])) {
            $model->regPubNo = $map['RegPubNo'];
        }
        if (isset($map['TrademarkForm'])) {
            $model->trademarkForm = $map['TrademarkForm'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['TrademarkStatus'])) {
            $model->trademarkStatus = $map['TrademarkStatus'];
        }
        if (isset($map['TrademarkType'])) {
            $model->trademarkType = $map['TrademarkType'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
