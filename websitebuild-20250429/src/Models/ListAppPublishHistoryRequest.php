<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ListAppPublishHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $deployChannel;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $publishEnv;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subchannel;

    /**
     * @var string
     */
    public $websiteDomain;
    protected $_name = [
        'bizId' => 'BizId',
        'deployChannel' => 'DeployChannel',
        'keyword' => 'Keyword',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'publishEnv' => 'PublishEnv',
        'sort' => 'Sort',
        'status' => 'Status',
        'subchannel' => 'Subchannel',
        'websiteDomain' => 'WebsiteDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->deployChannel) {
            $res['DeployChannel'] = $this->deployChannel;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->publishEnv) {
            $res['PublishEnv'] = $this->publishEnv;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subchannel) {
            $res['Subchannel'] = $this->subchannel;
        }

        if (null !== $this->websiteDomain) {
            $res['WebsiteDomain'] = $this->websiteDomain;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DeployChannel'])) {
            $model->deployChannel = $map['DeployChannel'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PublishEnv'])) {
            $model->publishEnv = $map['PublishEnv'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Subchannel'])) {
            $model->subchannel = $map['Subchannel'];
        }

        if (isset($map['WebsiteDomain'])) {
            $model->websiteDomain = $map['WebsiteDomain'];
        }

        return $model;
    }
}
