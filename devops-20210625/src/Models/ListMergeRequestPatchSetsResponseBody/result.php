<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestPatchSetsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1a072f5367c21f9de3464b8c0ee8546e47764d2d
     *
     * @var string
     */
    public $commitId;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 513fcfd81a9142d2bb0db4f72c0aa15b
     *
     * @var string
     */
    public $patchSetBizId;

    /**
     * @var string
     */
    public $patchSetName;

    /**
     * @example 1
     *
     * @var int
     */
    public $patchSetNo;

    /**
     * @example MERGE_SOURCE
     *
     * @var string
     */
    public $relatedMergeItemType;

    /**
     * @example 1a072f53
     *
     * @var string
     */
    public $shortCommitId;
    protected $_name = [
        'commitId'             => 'commitId',
        'createdAt'            => 'createdAt',
        'patchSetBizId'        => 'patchSetBizId',
        'patchSetName'         => 'patchSetName',
        'patchSetNo'           => 'patchSetNo',
        'relatedMergeItemType' => 'relatedMergeItemType',
        'shortCommitId'        => 'shortCommitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitId) {
            $res['commitId'] = $this->commitId;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->patchSetBizId) {
            $res['patchSetBizId'] = $this->patchSetBizId;
        }
        if (null !== $this->patchSetName) {
            $res['patchSetName'] = $this->patchSetName;
        }
        if (null !== $this->patchSetNo) {
            $res['patchSetNo'] = $this->patchSetNo;
        }
        if (null !== $this->relatedMergeItemType) {
            $res['relatedMergeItemType'] = $this->relatedMergeItemType;
        }
        if (null !== $this->shortCommitId) {
            $res['shortCommitId'] = $this->shortCommitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commitId'])) {
            $model->commitId = $map['commitId'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['patchSetBizId'])) {
            $model->patchSetBizId = $map['patchSetBizId'];
        }
        if (isset($map['patchSetName'])) {
            $model->patchSetName = $map['patchSetName'];
        }
        if (isset($map['patchSetNo'])) {
            $model->patchSetNo = $map['patchSetNo'];
        }
        if (isset($map['relatedMergeItemType'])) {
            $model->relatedMergeItemType = $map['relatedMergeItemType'];
        }
        if (isset($map['shortCommitId'])) {
            $model->shortCommitId = $map['shortCommitId'];
        }

        return $model;
    }
}
