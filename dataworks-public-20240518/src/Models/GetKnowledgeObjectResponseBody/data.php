<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody\data\content;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody\data\downloadFiles;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeObjectResponseBody\data\sourceReferences;

class data extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var downloadFiles[]
     */
    public $downloadFiles;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var bool
     */
    public $editable;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeObjectId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var sourceReferences[]
     */
    public $sourceReferences;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'downloadFiles' => 'DownloadFiles',
        'downloadUrl' => 'DownloadUrl',
        'editable' => 'Editable',
        'expiresIn' => 'ExpiresIn',
        'fileName' => 'FileName',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeObjectId' => 'KnowledgeObjectId',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'sizeBytes' => 'SizeBytes',
        'sourceReferences' => 'SourceReferences',
        'type' => 'Type',
        'versionNo' => 'VersionNo',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->downloadFiles)) {
            Model::validateArray($this->downloadFiles);
        }
        if (\is_array($this->sourceReferences)) {
            Model::validateArray($this->sourceReferences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadFiles) {
            if (\is_array($this->downloadFiles)) {
                $res['DownloadFiles'] = [];
                $n1 = 0;
                foreach ($this->downloadFiles as $item1) {
                    $res['DownloadFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->editable) {
            $res['Editable'] = $this->editable;
        }

        if (null !== $this->expiresIn) {
            $res['ExpiresIn'] = $this->expiresIn;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeObjectId) {
            $res['KnowledgeObjectId'] = $this->knowledgeObjectId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->sourceReferences) {
            if (\is_array($this->sourceReferences)) {
                $res['SourceReferences'] = [];
                $n1 = 0;
                foreach ($this->sourceReferences as $item1) {
                    $res['SourceReferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadFiles'])) {
            if (!empty($map['DownloadFiles'])) {
                $model->downloadFiles = [];
                $n1 = 0;
                foreach ($map['DownloadFiles'] as $item1) {
                    $model->downloadFiles[$n1] = downloadFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['Editable'])) {
            $model->editable = $map['Editable'];
        }

        if (isset($map['ExpiresIn'])) {
            $model->expiresIn = $map['ExpiresIn'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeObjectId'])) {
            $model->knowledgeObjectId = $map['KnowledgeObjectId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        if (isset($map['SourceReferences'])) {
            if (!empty($map['SourceReferences'])) {
                $model->sourceReferences = [];
                $n1 = 0;
                foreach ($map['SourceReferences'] as $item1) {
                    $model->sourceReferences[$n1] = sourceReferences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}
