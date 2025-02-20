<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestPatchSetsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $commitId;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $patchSetBizId;
    /**
     * @var string
     */
    public $patchSetName;
    /**
     * @var int
     */
    public $patchSetNo;
    /**
     * @var string
     */
    public $relatedMergeItemType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
