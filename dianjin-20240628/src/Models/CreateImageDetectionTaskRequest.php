<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateImageDetectionTaskRequest\fileInfo;

class CreateImageDetectionTaskRequest extends Model
{
    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'fileInfo' => 'fileInfo',
        'fileUrl' => 'fileUrl',
        'requestId' => 'requestId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (null !== $this->fileInfo) {
            $this->fileInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileInfo) {
            $res['fileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toArray($noStream) : $this->fileInfo;
        }

        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
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
        if (isset($map['fileInfo'])) {
            $model->fileInfo = fileInfo::fromMap($map['fileInfo']);
        }

        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
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
