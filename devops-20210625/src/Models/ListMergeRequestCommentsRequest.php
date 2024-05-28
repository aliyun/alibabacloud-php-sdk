<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListMergeRequestCommentsRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example GLOBAL_COMMENT
     *
     * @var string
     */
    public $commentType;

    /**
     * @example /src/main/test.java
     *
     * @var string
     */
    public $filePath;

    /**
     * @var string[]
     */
    public $patchSetBizIds;

    /**
     * @example false
     *
     * @var bool
     */
    public $resolved;

    /**
     * @example OPENED
     *
     * @var string
     */
    public $state;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $localId;

    /**
     * @description This parameter is required.
     *
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'commentType'        => 'commentType',
        'filePath'           => 'filePath',
        'patchSetBizIds'     => 'patchSetBizIds',
        'resolved'           => 'resolved',
        'state'              => 'state',
        'localId'            => 'localId',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->commentType) {
            $res['commentType'] = $this->commentType;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->patchSetBizIds) {
            $res['patchSetBizIds'] = $this->patchSetBizIds;
        }
        if (null !== $this->resolved) {
            $res['resolved'] = $this->resolved;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMergeRequestCommentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['commentType'])) {
            $model->commentType = $map['commentType'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['patchSetBizIds'])) {
            if (!empty($map['patchSetBizIds'])) {
                $model->patchSetBizIds = $map['patchSetBizIds'];
            }
        }
        if (isset($map['resolved'])) {
            $model->resolved = $map['resolved'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
