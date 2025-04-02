<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class SearchFormDataSecondGenerationNoTableFieldRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $createFromTimeGMT;

    /**
     * @var string
     */
    public $createToTimeGMT;

    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var string
     */
    public $modifiedFromTimeGMT;

    /**
     * @var string
     */
    public $modifiedToTimeGMT;

    /**
     * @var string
     */
    public $orderConfigJson;

    /**
     * @var string
     */
    public $originatorId;

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
    public $searchCondition;

    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType' => 'AppType',
        'createFromTimeGMT' => 'CreateFromTimeGMT',
        'createToTimeGMT' => 'CreateToTimeGMT',
        'formUuid' => 'FormUuid',
        'modifiedFromTimeGMT' => 'ModifiedFromTimeGMT',
        'modifiedToTimeGMT' => 'ModifiedToTimeGMT',
        'orderConfigJson' => 'OrderConfigJson',
        'originatorId' => 'OriginatorId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchCondition' => 'SearchCondition',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
