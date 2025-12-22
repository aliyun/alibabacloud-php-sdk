<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskRequest\creationInstruction;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskRequest\fileInfo;

class CreateVideoCreationTaskRequest extends Model
{
    /**
     * @var creationInstruction
     */
    public $creationInstruction;

    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $imageDetectionTaskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'creationInstruction' => 'creationInstruction',
        'fileInfo' => 'fileInfo',
        'imageDetectionTaskId' => 'imageDetectionTaskId',
        'requestId' => 'requestId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (null !== $this->creationInstruction) {
            $this->creationInstruction->validate();
        }
        if (null !== $this->fileInfo) {
            $this->fileInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationInstruction) {
            $res['creationInstruction'] = null !== $this->creationInstruction ? $this->creationInstruction->toArray($noStream) : $this->creationInstruction;
        }

        if (null !== $this->fileInfo) {
            $res['fileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toArray($noStream) : $this->fileInfo;
        }

        if (null !== $this->imageDetectionTaskId) {
            $res['imageDetectionTaskId'] = $this->imageDetectionTaskId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['creationInstruction'])) {
            $model->creationInstruction = creationInstruction::fromMap($map['creationInstruction']);
        }

        if (isset($map['fileInfo'])) {
            $model->fileInfo = fileInfo::fromMap($map['fileInfo']);
        }

        if (isset($map['imageDetectionTaskId'])) {
            $model->imageDetectionTaskId = $map['imageDetectionTaskId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
