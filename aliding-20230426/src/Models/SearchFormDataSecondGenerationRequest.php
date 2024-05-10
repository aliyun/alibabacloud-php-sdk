<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SearchFormDataSecondGenerationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKT0xxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $createFromTimeGMT;

    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $createToTimeGMT;

    /**
     * @description This parameter is required.
     *
     * @example FORM-xxxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $modifiedFromTimeGMT;

    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $modifiedToTimeGMT;

    /**
     * @example {}
     *
     * @var string
     */
    public $orderConfigJson;

    /**
     * @example 012345
     *
     * @var string
     */
    public $originatorId;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example {}
     *
     * @var string
     */
    public $searchCondition;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'             => 'AppType',
        'createFromTimeGMT'   => 'CreateFromTimeGMT',
        'createToTimeGMT'     => 'CreateToTimeGMT',
        'formUuid'            => 'FormUuid',
        'modifiedFromTimeGMT' => 'ModifiedFromTimeGMT',
        'modifiedToTimeGMT'   => 'ModifiedToTimeGMT',
        'orderConfigJson'     => 'OrderConfigJson',
        'originatorId'        => 'OriginatorId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'searchCondition'     => 'SearchCondition',
        'systemToken'         => 'SystemToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->createFromTimeGMT) {
            $res['CreateFromTimeGMT'] = $this->createFromTimeGMT;
        }
        if (null !== $this->createToTimeGMT) {
            $res['CreateToTimeGMT'] = $this->createToTimeGMT;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->modifiedFromTimeGMT) {
            $res['ModifiedFromTimeGMT'] = $this->modifiedFromTimeGMT;
        }
        if (null !== $this->modifiedToTimeGMT) {
            $res['ModifiedToTimeGMT'] = $this->modifiedToTimeGMT;
        }
        if (null !== $this->orderConfigJson) {
            $res['OrderConfigJson'] = $this->orderConfigJson;
        }
        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchCondition) {
            $res['SearchCondition'] = $this->searchCondition;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFormDataSecondGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreateFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['CreateFromTimeGMT'];
        }
        if (isset($map['CreateToTimeGMT'])) {
            $model->createToTimeGMT = $map['CreateToTimeGMT'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['ModifiedFromTimeGMT'])) {
            $model->modifiedFromTimeGMT = $map['ModifiedFromTimeGMT'];
        }
        if (isset($map['ModifiedToTimeGMT'])) {
            $model->modifiedToTimeGMT = $map['ModifiedToTimeGMT'];
        }
        if (isset($map['OrderConfigJson'])) {
            $model->orderConfigJson = $map['OrderConfigJson'];
        }
        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchCondition'])) {
            $model->searchCondition = $map['SearchCondition'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
