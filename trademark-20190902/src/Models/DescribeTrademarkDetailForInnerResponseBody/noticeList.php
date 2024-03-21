<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkDetailForInnerResponseBody;

use AlibabaCloud\Tea\Model;

class noticeList extends Model
{
    /**
     * @var string
     */
    public $annDate;

    /**
     * @var string
     */
    public $annId;

    /**
     * @var string
     */
    public $annNum;

    /**
     * @var string
     */
    public $annTypeCode;

    /**
     * @var string
     */
    public $annTypeName;

    /**
     * @var string
     */
    public $applicant;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $originalImageUrl;

    /**
     * @var string
     */
    public $pageNo;

    /**
     * @var string
     */
    public $reactNum;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var string
     */
    public $trademarkName;
    protected $_name = [
        'annDate'            => 'AnnDate',
        'annId'              => 'AnnId',
        'annNum'             => 'AnnNum',
        'annTypeCode'        => 'AnnTypeCode',
        'annTypeName'        => 'AnnTypeName',
        'applicant'          => 'Applicant',
        'date'               => 'Date',
        'imageUrl'           => 'ImageUrl',
        'originalImageUrl'   => 'OriginalImageUrl',
        'pageNo'             => 'PageNo',
        'reactNum'           => 'ReactNum',
        'registrationNumber' => 'RegistrationNumber',
        'trademarkName'      => 'TrademarkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annDate) {
            $res['AnnDate'] = $this->annDate;
        }
        if (null !== $this->annId) {
            $res['AnnId'] = $this->annId;
        }
        if (null !== $this->annNum) {
            $res['AnnNum'] = $this->annNum;
        }
        if (null !== $this->annTypeCode) {
            $res['AnnTypeCode'] = $this->annTypeCode;
        }
        if (null !== $this->annTypeName) {
            $res['AnnTypeName'] = $this->annTypeName;
        }
        if (null !== $this->applicant) {
            $res['Applicant'] = $this->applicant;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->originalImageUrl) {
            $res['OriginalImageUrl'] = $this->originalImageUrl;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->reactNum) {
            $res['ReactNum'] = $this->reactNum;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noticeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnDate'])) {
            $model->annDate = $map['AnnDate'];
        }
        if (isset($map['AnnId'])) {
            $model->annId = $map['AnnId'];
        }
        if (isset($map['AnnNum'])) {
            $model->annNum = $map['AnnNum'];
        }
        if (isset($map['AnnTypeCode'])) {
            $model->annTypeCode = $map['AnnTypeCode'];
        }
        if (isset($map['AnnTypeName'])) {
            $model->annTypeName = $map['AnnTypeName'];
        }
        if (isset($map['Applicant'])) {
            $model->applicant = $map['Applicant'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['OriginalImageUrl'])) {
            $model->originalImageUrl = $map['OriginalImageUrl'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['ReactNum'])) {
            $model->reactNum = $map['ReactNum'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
