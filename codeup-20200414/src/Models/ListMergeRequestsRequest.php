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
    public $groupIdList;

    /**
     * @var string
     */
    public $projectIdList;

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
    public $assigneeCodeupIdList;

    /**
     * @var string
     */
    public $assigneeIdList;

    /**
     * @var string
     */
    public $subscriberCodeupIdList;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $afterDate;

    /**
     * @var string
     */
    public $beforeDate;
    protected $_name = [
        'accessToken'            => 'AccessToken',
        'organizationId'         => 'OrganizationId',
        'page'                   => 'Page',
        'pageSize'               => 'PageSize',
        'groupIdList'            => 'GroupIdList',
        'projectIdList'          => 'ProjectIdList',
        'authorCodeupIdList'     => 'AuthorCodeupIdList',
        'authorIdList'           => 'AuthorIdList',
        'assigneeCodeupIdList'   => 'AssigneeCodeupIdList',
        'assigneeIdList'         => 'AssigneeIdList',
        'subscriberCodeupIdList' => 'SubscriberCodeupIdList',
        'state'                  => 'State',
        'search'                 => 'Search',
        'order'                  => 'Order',
        'afterDate'              => 'AfterDate',
        'beforeDate'             => 'BeforeDate',
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
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->projectIdList) {
            $res['ProjectIdList'] = $this->projectIdList;
        }
        if (null !== $this->authorCodeupIdList) {
            $res['AuthorCodeupIdList'] = $this->authorCodeupIdList;
        }
        if (null !== $this->authorIdList) {
            $res['AuthorIdList'] = $this->authorIdList;
        }
        if (null !== $this->assigneeCodeupIdList) {
            $res['AssigneeCodeupIdList'] = $this->assigneeCodeupIdList;
        }
        if (null !== $this->assigneeIdList) {
            $res['AssigneeIdList'] = $this->assigneeIdList;
        }
        if (null !== $this->subscriberCodeupIdList) {
            $res['SubscriberCodeupIdList'] = $this->subscriberCodeupIdList;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
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
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }
        if (isset($map['ProjectIdList'])) {
            $model->projectIdList = $map['ProjectIdList'];
        }
        if (isset($map['AuthorCodeupIdList'])) {
            $model->authorCodeupIdList = $map['AuthorCodeupIdList'];
        }
        if (isset($map['AuthorIdList'])) {
            $model->authorIdList = $map['AuthorIdList'];
        }
        if (isset($map['AssigneeCodeupIdList'])) {
            $model->assigneeCodeupIdList = $map['AssigneeCodeupIdList'];
        }
        if (isset($map['AssigneeIdList'])) {
            $model->assigneeIdList = $map['AssigneeIdList'];
        }
        if (isset($map['SubscriberCodeupIdList'])) {
            $model->subscriberCodeupIdList = $map['SubscriberCodeupIdList'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }

        return $model;
    }
}
