<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class BrandKnowledgeDocument extends Model
{
    /**
     * @var bool
     */
    public $contentSufficient;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $displayTitle;

    /**
     * @var string
     */
    public $docCategory;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string[]
     */
    public $keyTopics;

    /**
     * @var string
     */
    public $oneLineSummary;

    /**
     * @var string
     */
    public $originalName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $readyAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $summaryErrorCode;

    /**
     * @var string
     */
    public $summaryStatus;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'contentSufficient' => 'ContentSufficient',
        'contentType' => 'ContentType',
        'createdAt' => 'CreatedAt',
        'deletable' => 'Deletable',
        'displayTitle' => 'DisplayTitle',
        'docCategory' => 'DocCategory',
        'documentId' => 'DocumentId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'fileSize' => 'FileSize',
        'keyTopics' => 'KeyTopics',
        'oneLineSummary' => 'OneLineSummary',
        'originalName' => 'OriginalName',
        'projectId' => 'ProjectId',
        'readyAt' => 'ReadyAt',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
        'summaryErrorCode' => 'SummaryErrorCode',
        'summaryStatus' => 'SummaryStatus',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->keyTopics)) {
            Model::validateArray($this->keyTopics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentSufficient) {
            $res['ContentSufficient'] = $this->contentSufficient;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        if (null !== $this->displayTitle) {
            $res['DisplayTitle'] = $this->displayTitle;
        }

        if (null !== $this->docCategory) {
            $res['DocCategory'] = $this->docCategory;
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->keyTopics) {
            if (\is_array($this->keyTopics)) {
                $res['KeyTopics'] = [];
                $n1 = 0;
                foreach ($this->keyTopics as $item1) {
                    $res['KeyTopics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->oneLineSummary) {
            $res['OneLineSummary'] = $this->oneLineSummary;
        }

        if (null !== $this->originalName) {
            $res['OriginalName'] = $this->originalName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->readyAt) {
            $res['ReadyAt'] = $this->readyAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        if (null !== $this->summaryErrorCode) {
            $res['SummaryErrorCode'] = $this->summaryErrorCode;
        }

        if (null !== $this->summaryStatus) {
            $res['SummaryStatus'] = $this->summaryStatus;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['ContentSufficient'])) {
            $model->contentSufficient = $map['ContentSufficient'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        if (isset($map['DisplayTitle'])) {
            $model->displayTitle = $map['DisplayTitle'];
        }

        if (isset($map['DocCategory'])) {
            $model->docCategory = $map['DocCategory'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['KeyTopics'])) {
            if (!empty($map['KeyTopics'])) {
                $model->keyTopics = [];
                $n1 = 0;
                foreach ($map['KeyTopics'] as $item1) {
                    $model->keyTopics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OneLineSummary'])) {
            $model->oneLineSummary = $map['OneLineSummary'];
        }

        if (isset($map['OriginalName'])) {
            $model->originalName = $map['OriginalName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReadyAt'])) {
            $model->readyAt = $map['ReadyAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        if (isset($map['SummaryErrorCode'])) {
            $model->summaryErrorCode = $map['SummaryErrorCode'];
        }

        if (isset($map['SummaryStatus'])) {
            $model->summaryStatus = $map['SummaryStatus'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
