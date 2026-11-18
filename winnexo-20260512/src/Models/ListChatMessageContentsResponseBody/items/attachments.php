<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListChatMessageContentsResponseBody\items;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var int
     */
    public $charCount;

    /**
     * @var int
     */
    public $chunkCount;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $emptyReason;

    /**
     * @var string
     */
    public $failureCode;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var bool
     */
    public $found;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $modality;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $truncated;
    protected $_name = [
        'attachmentId' => 'attachmentId',
        'charCount' => 'charCount',
        'chunkCount' => 'chunkCount',
        'content' => 'content',
        'emptyReason' => 'emptyReason',
        'failureCode' => 'failureCode',
        'failureReason' => 'failureReason',
        'fileName' => 'fileName',
        'found' => 'found',
        'messageId' => 'messageId',
        'modality' => 'modality',
        'status' => 'status',
        'truncated' => 'truncated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentId) {
            $res['attachmentId'] = $this->attachmentId;
        }

        if (null !== $this->charCount) {
            $res['charCount'] = $this->charCount;
        }

        if (null !== $this->chunkCount) {
            $res['chunkCount'] = $this->chunkCount;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->emptyReason) {
            $res['emptyReason'] = $this->emptyReason;
        }

        if (null !== $this->failureCode) {
            $res['failureCode'] = $this->failureCode;
        }

        if (null !== $this->failureReason) {
            $res['failureReason'] = $this->failureReason;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->found) {
            $res['found'] = $this->found;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->modality) {
            $res['modality'] = $this->modality;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->truncated) {
            $res['truncated'] = $this->truncated;
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
        if (isset($map['attachmentId'])) {
            $model->attachmentId = $map['attachmentId'];
        }

        if (isset($map['charCount'])) {
            $model->charCount = $map['charCount'];
        }

        if (isset($map['chunkCount'])) {
            $model->chunkCount = $map['chunkCount'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['emptyReason'])) {
            $model->emptyReason = $map['emptyReason'];
        }

        if (isset($map['failureCode'])) {
            $model->failureCode = $map['failureCode'];
        }

        if (isset($map['failureReason'])) {
            $model->failureReason = $map['failureReason'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['found'])) {
            $model->found = $map['found'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['modality'])) {
            $model->modality = $map['modality'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['truncated'])) {
            $model->truncated = $map['truncated'];
        }

        return $model;
    }
}
