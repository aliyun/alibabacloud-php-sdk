<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ListTrademarkSearchForInnerRequest extends Model
{
    /**
     * @var string
     */
    public $applyBeginTime;

    /**
     * @var string
     */
    public $applyEndTime;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var bool
     */
    public $ifPrecision;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $searchPreference;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $umid;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyBeginTime'   => 'ApplyBeginTime',
        'applyEndTime'     => 'ApplyEndTime',
        'classification'   => 'Classification',
        'ifPrecision'      => 'IfPrecision',
        'keyword'          => 'Keyword',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'product'          => 'Product',
        'searchPreference' => 'SearchPreference',
        'searchType'       => 'SearchType',
        'status'           => 'Status',
        'umid'             => 'Umid',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyBeginTime) {
            $res['ApplyBeginTime'] = $this->applyBeginTime;
        }
        if (null !== $this->applyEndTime) {
            $res['ApplyEndTime'] = $this->applyEndTime;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->ifPrecision) {
            $res['IfPrecision'] = $this->ifPrecision;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->searchPreference) {
            $res['SearchPreference'] = $this->searchPreference;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrademarkSearchForInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyBeginTime'])) {
            $model->applyBeginTime = $map['ApplyBeginTime'];
        }
        if (isset($map['ApplyEndTime'])) {
            $model->applyEndTime = $map['ApplyEndTime'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['IfPrecision'])) {
            $model->ifPrecision = $map['IfPrecision'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['SearchPreference'])) {
            $model->searchPreference = $map['SearchPreference'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
