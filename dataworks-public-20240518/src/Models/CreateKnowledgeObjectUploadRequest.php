<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateKnowledgeObjectUploadRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $contentMd5;

    /**
     * @var string
     */
    public $contentSha256;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var int
     */
    public $sizeBytes;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'contentMd5' => 'ContentMd5',
        'contentSha256' => 'ContentSha256',
        'contentType' => 'ContentType',
        'fileName' => 'FileName',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'sizeBytes' => 'SizeBytes',
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

        if (null !== $this->contentMd5) {
            $res['ContentMd5'] = $this->contentMd5;
        }

        if (null !== $this->contentSha256) {
            $res['ContentSha256'] = $this->contentSha256;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
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

        if (isset($map['ContentMd5'])) {
            $model->contentMd5 = $map['ContentMd5'];
        }

        if (isset($map['ContentSha256'])) {
            $model->contentSha256 = $map['ContentSha256'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        return $model;
    }
}
