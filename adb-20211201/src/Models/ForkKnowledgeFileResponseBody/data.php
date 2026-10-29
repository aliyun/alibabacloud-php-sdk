<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ForkKnowledgeFileResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileLocation;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $ownerFileId;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var string
     */
    public $sourceFileId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'fileId' => 'FileId',
        'fileLocation' => 'FileLocation',
        'message' => 'Message',
        'ownerFileId' => 'OwnerFileId',
        'processStatus' => 'ProcessStatus',
        'sourceFileId' => 'SourceFileId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileLocation) {
            $res['FileLocation'] = $this->fileLocation;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ownerFileId) {
            $res['OwnerFileId'] = $this->ownerFileId;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->sourceFileId) {
            $res['SourceFileId'] = $this->sourceFileId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileLocation'])) {
            $model->fileLocation = $map['FileLocation'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OwnerFileId'])) {
            $model->ownerFileId = $map['OwnerFileId'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['SourceFileId'])) {
            $model->sourceFileId = $map['SourceFileId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
