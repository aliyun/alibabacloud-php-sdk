<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTrademarkResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $trademarkApplicantName;

    /**
     * @var string
     */
    public $trademarkEffExpDate;

    /**
     * @var int
     */
    public $trademarkId;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $trademarkPic;

    /**
     * @var string
     */
    public $trademarkPicUrl;

    /**
     * @var string
     */
    public $trademarkRegistrationNumber;
    protected $_name = [
        'trademarkApplicantName' => 'TrademarkApplicantName',
        'trademarkEffExpDate' => 'TrademarkEffExpDate',
        'trademarkId' => 'TrademarkId',
        'trademarkName' => 'TrademarkName',
        'trademarkPic' => 'TrademarkPic',
        'trademarkPicUrl' => 'TrademarkPicUrl',
        'trademarkRegistrationNumber' => 'TrademarkRegistrationNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trademarkApplicantName) {
            $res['TrademarkApplicantName'] = $this->trademarkApplicantName;
        }

        if (null !== $this->trademarkEffExpDate) {
            $res['TrademarkEffExpDate'] = $this->trademarkEffExpDate;
        }

        if (null !== $this->trademarkId) {
            $res['TrademarkId'] = $this->trademarkId;
        }

        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        if (null !== $this->trademarkPic) {
            $res['TrademarkPic'] = $this->trademarkPic;
        }

        if (null !== $this->trademarkPicUrl) {
            $res['TrademarkPicUrl'] = $this->trademarkPicUrl;
        }

        if (null !== $this->trademarkRegistrationNumber) {
            $res['TrademarkRegistrationNumber'] = $this->trademarkRegistrationNumber;
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
        if (isset($map['TrademarkApplicantName'])) {
            $model->trademarkApplicantName = $map['TrademarkApplicantName'];
        }

        if (isset($map['TrademarkEffExpDate'])) {
            $model->trademarkEffExpDate = $map['TrademarkEffExpDate'];
        }

        if (isset($map['TrademarkId'])) {
            $model->trademarkId = $map['TrademarkId'];
        }

        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        if (isset($map['TrademarkPic'])) {
            $model->trademarkPic = $map['TrademarkPic'];
        }

        if (isset($map['TrademarkPicUrl'])) {
            $model->trademarkPicUrl = $map['TrademarkPicUrl'];
        }

        if (isset($map['TrademarkRegistrationNumber'])) {
            $model->trademarkRegistrationNumber = $map['TrademarkRegistrationNumber'];
        }

        return $model;
    }
}
