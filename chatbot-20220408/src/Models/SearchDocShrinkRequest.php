<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class SearchDocShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @var string
     */
    public $createTimeBegin;

    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $endTimeBegin;

    /**
     * @var string
     */
    public $endTimeEnd;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $modifyTimeBegin;

    /**
     * @var string
     */
    public $modifyTimeEnd;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $processStatus;

    /**
     * @var int
     */
    public $searchScope;

    /**
     * @var string
     */
    public $startTimeBegin;

    /**
     * @var string
     */
    public $startTimeEnd;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tagIdsShrink;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'categoryIdsShrink' => 'CategoryIds',
        'createTimeBegin' => 'CreateTimeBegin',
        'createTimeEnd' => 'CreateTimeEnd',
        'createUserName' => 'CreateUserName',
        'endTimeBegin' => 'EndTimeBegin',
        'endTimeEnd' => 'EndTimeEnd',
        'keyword' => 'Keyword',
        'modifyTimeBegin' => 'ModifyTimeBegin',
        'modifyTimeEnd' => 'ModifyTimeEnd',
        'modifyUserName' => 'ModifyUserName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'processStatus' => 'ProcessStatus',
        'searchScope' => 'SearchScope',
        'startTimeBegin' => 'StartTimeBegin',
        'startTimeEnd' => 'StartTimeEnd',
        'status' => 'Status',
        'tagIdsShrink' => 'TagIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->categoryIdsShrink) {
            $res['CategoryIds'] = $this->categoryIdsShrink;
        }

        if (null !== $this->createTimeBegin) {
            $res['CreateTimeBegin'] = $this->createTimeBegin;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->endTimeBegin) {
            $res['EndTimeBegin'] = $this->endTimeBegin;
        }

        if (null !== $this->endTimeEnd) {
            $res['EndTimeEnd'] = $this->endTimeEnd;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->modifyTimeBegin) {
            $res['ModifyTimeBegin'] = $this->modifyTimeBegin;
        }

        if (null !== $this->modifyTimeEnd) {
            $res['ModifyTimeEnd'] = $this->modifyTimeEnd;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->searchScope) {
            $res['SearchScope'] = $this->searchScope;
        }

        if (null !== $this->startTimeBegin) {
            $res['StartTimeBegin'] = $this->startTimeBegin;
        }

        if (null !== $this->startTimeEnd) {
            $res['StartTimeEnd'] = $this->startTimeEnd;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['CategoryIds'])) {
            $model->categoryIdsShrink = $map['CategoryIds'];
        }

        if (isset($map['CreateTimeBegin'])) {
            $model->createTimeBegin = $map['CreateTimeBegin'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['EndTimeBegin'])) {
            $model->endTimeBegin = $map['EndTimeBegin'];
        }

        if (isset($map['EndTimeEnd'])) {
            $model->endTimeEnd = $map['EndTimeEnd'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['ModifyTimeBegin'])) {
            $model->modifyTimeBegin = $map['ModifyTimeBegin'];
        }

        if (isset($map['ModifyTimeEnd'])) {
            $model->modifyTimeEnd = $map['ModifyTimeEnd'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['SearchScope'])) {
            $model->searchScope = $map['SearchScope'];
        }

        if (isset($map['StartTimeBegin'])) {
            $model->startTimeBegin = $map['StartTimeBegin'];
        }

        if (isset($map['StartTimeEnd'])) {
            $model->startTimeEnd = $map['StartTimeEnd'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagIds'])) {
            $model->tagIdsShrink = $map['TagIds'];
        }

        return $model;
    }
}
