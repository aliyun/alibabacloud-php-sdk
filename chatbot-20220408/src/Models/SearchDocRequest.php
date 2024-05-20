<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class SearchDocRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var int[]
     */
    public $categoryIds;

    /**
     * @example 2022-04-02T03:09:30Z
     *
     * @var string
     */
    public $createTimeBegin;

    /**
     * @example 2022-05-02T03:09:30Z
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @example 2023-04-02T03:09:30Z
     *
     * @var string
     */
    public $endTimeBegin;

    /**
     * @example 2023-05-02T03:09:30Z
     *
     * @var string
     */
    public $endTimeEnd;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @example 2023-04-02T03:09:30Z
     *
     * @var string
     */
    public $modifyTimeBegin;

    /**
     * @example 2023-05-02T03:09:30Z
     *
     * @var string
     */
    public $modifyTimeEnd;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $processStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $searchScope;

    /**
     * @example 2022-04-02T03:09:30Z
     *
     * @var string
     */
    public $startTimeBegin;

    /**
     * @example 2022-04-03T03:09:30Z
     *
     * @var string
     */
    public $startTimeEnd;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var int[]
     */
    public $tagIds;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'categoryIds'     => 'CategoryIds',
        'createTimeBegin' => 'CreateTimeBegin',
        'createTimeEnd'   => 'CreateTimeEnd',
        'createUserName'  => 'CreateUserName',
        'endTimeBegin'    => 'EndTimeBegin',
        'endTimeEnd'      => 'EndTimeEnd',
        'keyword'         => 'Keyword',
        'modifyTimeBegin' => 'ModifyTimeBegin',
        'modifyTimeEnd'   => 'ModifyTimeEnd',
        'modifyUserName'  => 'ModifyUserName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'processStatus'   => 'ProcessStatus',
        'searchScope'     => 'SearchScope',
        'startTimeBegin'  => 'StartTimeBegin',
        'startTimeEnd'    => 'StartTimeEnd',
        'status'          => 'Status',
        'tagIds'          => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
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
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
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
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }

        return $model;
    }
}
