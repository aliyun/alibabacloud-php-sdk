<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class SearchFaqRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 类目唯一标识
     *
     * @var int[]
     */
    public $categoryIds;

    /**
     * @description 创建开始时间
     *
     * @var string
     */
    public $createTimeBegin;

    /**
     * @description 创建结束时间
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description 创建人
     *
     * @var string
     */
    public $createUserName;

    /**
     * @description 失效开始时间
     *
     * @var string
     */
    public $endTimeBegin;

    /**
     * @description 失效结束时间
     *
     * @var string
     */
    public $endTimeEnd;

    /**
     * @description 关键字
     *
     * @var string
     */
    public $keyword;

    /**
     * @description 修改开始时间
     *
     * @var string
     */
    public $modifyTimeBegin;

    /**
     * @description 修改结束时间
     *
     * @var string
     */
    public $modifyTimeEnd;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @description 页码 默认1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页数量，默认10，最大50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 搜索范围： 1-搜索标题相似问, 2-搜索答案, 3-搜索全部
     *
     * @var int
     */
    public $searchScope;

    /**
     * @description 生效开始时间
     *
     * @var string
     */
    public $startTimeBegin;

    /**
     * @description 生效结束时间
     *
     * @var string
     */
    public $startTimeEnd;

    /**
     * @description 知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布
     *
     * @var int
     */
    public $status;
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
        'searchScope'     => 'SearchScope',
        'startTimeBegin'  => 'StartTimeBegin',
        'startTimeEnd'    => 'StartTimeEnd',
        'status'          => 'Status',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaqRequest
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

        return $model;
    }
}
