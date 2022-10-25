<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class ListMergeRequestsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $afterDate;

    /**
     * @var string
     */
    public $assigneeCodeupIdList;

    /**
     * @var string
     */
    public $assigneeIdList;

    /**
     * @var string
     */
    public $authorCodeupIdList;

    /**
     * @var string
     */
    public $authorIdList;

    /**
     * @var string
     */
    public $beforeDate;

    /**
     * @var string
     */
    public $groupIdList;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectIdList;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $subscriberCodeupIdList;
    protected $_name = [
        'accessToken'            => 'AccessToken',
        'afterDate'              => 'AfterDate',
        'assigneeCodeupIdList'   => 'AssigneeCodeupIdList',
        'assigneeIdList'         => 'AssigneeIdList',
        'authorCodeupIdList'     => 'AuthorCodeupIdList',
        'authorIdList'           => 'AuthorIdList',
        'beforeDate'             => 'BeforeDate',
        'groupIdList'            => 'GroupIdList',
        'order'                  => 'Order',
        'organizationId'         => 'OrganizationId',
        'page'                   => 'Page',
        'pageSize'               => 'PageSize',
        'projectIdList'          => 'ProjectIdList',
        'search'                 => 'Search',
        'state'                  => 'State',
        'subscriberCodeupIdList' => 'SubscriberCodeupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->assigneeCodeupIdList) {
            $res['AssigneeCodeupIdList'] = $this->assigneeCodeupIdList;
        }
        if (null !== $this->assigneeIdList) {
            $res['AssigneeIdList'] = $this->assigneeIdList;
        }
        if (null !== $this->authorCodeupIdList) {
            $res['AuthorCodeupIdList'] = $this->authorCodeupIdList;
        }
        if (null !== $this->authorIdList) {
            $res['AuthorIdList'] = $this->authorIdList;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectIdList) {
            $res['ProjectIdList'] = $this->projectIdList;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->subscriberCodeupIdList) {
            $res['SubscriberCodeupIdList'] = $this->subscriberCodeupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMergeRequestsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['AssigneeCodeupIdList'])) {
            $model->assigneeCodeupIdList = $map['AssigneeCodeupIdList'];
        }
        if (isset($map['AssigneeIdList'])) {
            $model->assigneeIdList = $map['AssigneeIdList'];
        }
        if (isset($map['AuthorCodeupIdList'])) {
            $model->authorCodeupIdList = $map['AuthorCodeupIdList'];
        }
        if (isset($map['AuthorIdList'])) {
            $model->authorIdList = $map['AuthorIdList'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectIdList'])) {
            $model->projectIdList = $map['ProjectIdList'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubscriberCodeupIdList'])) {
            $model->subscriberCodeupIdList = $map['SubscriberCodeupIdList'];
        }

        return $model;
    }
}
