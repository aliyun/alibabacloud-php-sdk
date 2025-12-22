<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateImageDetectionTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateImageDetectionTaskResponseBody\data\fileInfo;

class data extends Model
{
    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'fileInfo' => 'fileInfo',
        'requestId' => 'requestId',
        'taskId' => 'taskId',
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
