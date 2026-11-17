<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeObjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expectedModifyTime;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeObjectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'contentShrink' => 'Content',
        'description' => 'Description',
        'expectedModifyTime' => 'ExpectedModifyTime',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeObjectId' => 'KnowledgeObjectId',
        'name' => 'Name',
        'uploadId' => 'UploadId',
        'versionNo' => 'VersionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expectedModifyTime) {
            $res['ExpectedModifyTime'] = $this->expectedModifyTime;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeObjectId) {
            $res['KnowledgeObjectId'] = $this->knowledgeObjectId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpectedModifyTime'])) {
            $model->expectedModifyTime = $map['ExpectedModifyTime'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeObjectId'])) {
            $model->knowledgeObjectId = $map['KnowledgeObjectId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}
