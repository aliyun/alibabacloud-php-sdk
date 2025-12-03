<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommentResponseBody\result;

use AlibabaCloud\Dara\Model;

class relatedPatchSet extends Model
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
     * @var string
     */
    public $patchSetNo;

    /**
     * @var string
     */
    public $relatedMergeItemType;

    /**
     * @var string
     */
    public $shortId;
    protected $_name = [
        'commitId' => 'commitId',
        'createdAt' => 'createdAt',
        'patchSetBizId' => 'patchSetBizId',
        'patchSetName' => 'patchSetName',
        'patchSetNo' => 'patchSetNo',
        'relatedMergeItemType' => 'relatedMergeItemType',
        'shortId' => 'shortId',
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

        if (null !== $this->shortId) {
            $res['shortId'] = $this->shortId;
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

        if (isset($map['shortId'])) {
            $model->shortId = $map['shortId'];
        }

        return $model;
    }
}
