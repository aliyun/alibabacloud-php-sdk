<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskVersionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class batchTaskVersionList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @example 2024-10-10 10:10:10
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-10-10 10:10:10
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example n_10231001
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 10232111011
     *
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $published;

    /**
     * @example 20110110
     *
     * @var string
     */
    public $userId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $userName;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'comment' => 'Comment',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'nodeId' => 'NodeId',
        'projectId' => 'ProjectId',
        'published' => 'Published',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchTaskVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
