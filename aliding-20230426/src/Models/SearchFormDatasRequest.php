<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SearchFormDatasRequest extends Model
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
     * @example 20
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 20
     *
     * @var string
     */
    public $dynamicOrder;

    /**
     * @description This parameter is required.
     *
     * @example FORM-xxxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example en_US
     *
     * @var string
     */
    public $language;

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
    public $pageSize;

    /**
     * @var string
     */
    public $searchFieldJson;

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
        'currentPage'         => 'CurrentPage',
        'dynamicOrder'        => 'DynamicOrder',
        'formUuid'            => 'FormUuid',
        'language'            => 'Language',
        'modifiedFromTimeGMT' => 'ModifiedFromTimeGMT',
        'modifiedToTimeGMT'   => 'ModifiedToTimeGMT',
        'originatorId'        => 'OriginatorId',
        'pageSize'            => 'PageSize',
        'searchFieldJson'     => 'SearchFieldJson',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dynamicOrder) {
            $res['DynamicOrder'] = $this->dynamicOrder;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->modifiedFromTimeGMT) {
            $res['ModifiedFromTimeGMT'] = $this->modifiedFromTimeGMT;
        }
        if (null !== $this->modifiedToTimeGMT) {
            $res['ModifiedToTimeGMT'] = $this->modifiedToTimeGMT;
        }
        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchFieldJson) {
            $res['SearchFieldJson'] = $this->searchFieldJson;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFormDatasRequest
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DynamicOrder'])) {
            $model->dynamicOrder = $map['DynamicOrder'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ModifiedFromTimeGMT'])) {
            $model->modifiedFromTimeGMT = $map['ModifiedFromTimeGMT'];
        }
        if (isset($map['ModifiedToTimeGMT'])) {
            $model->modifiedToTimeGMT = $map['ModifiedToTimeGMT'];
        }
        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchFieldJson'])) {
            $model->searchFieldJson = $map['SearchFieldJson'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
