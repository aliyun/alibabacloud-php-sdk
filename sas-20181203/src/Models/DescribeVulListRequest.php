<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVulListRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var string
     */
    public $attachTypes;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $dealed;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $ids;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $necessity;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;
    /**
     * @var string
     */
    public $statusList;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $useNextToken;
    /**
     * @var string
     */
    public $uuids;
    /**
     * @var string
     */
    public $vpcInstanceIds;
    protected $_name = [
        'aliasName'                  => 'AliasName',
        'attachTypes'                => 'AttachTypes',
        'currentPage'                => 'CurrentPage',
        'dealed'                     => 'Dealed',
        'groupId'                    => 'GroupId',
        'ids'                        => 'Ids',
        'lang'                       => 'Lang',
        'name'                       => 'Name',
        'necessity'                  => 'Necessity',
        'nextToken'                  => 'NextToken',
        'pageSize'                   => 'PageSize',
        'remark'                     => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'statusList'                 => 'StatusList',
        'type'                       => 'Type',
        'useNextToken'               => 'UseNextToken',
        'uuids'                      => 'Uuids',
        'vpcInstanceIds'             => 'VpcInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->useNextToken) {
            $res['UseNextToken'] = $this->useNextToken;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UseNextToken'])) {
            $model->useNextToken = $map['UseNextToken'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }

        return $model;
    }
}
