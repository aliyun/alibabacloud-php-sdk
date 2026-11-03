<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageUpscaleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageUpscaleResponseBody\data\usageMap;

class data extends Model
{
    /**
     * @var data\data
     */
    public $data;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var usageMap
     */
    public $usageMap;
    protected $_name = [
        'data' => 'Data',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'success' => 'Success',
        'taskId' => 'TaskId',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (null !== $this->usageMap) {
            $this->usageMap->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->usageMap) {
            $res['UsageMap'] = null !== $this->usageMap ? $this->usageMap->toArray($noStream) : $this->usageMap;
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
        if (isset($map['Data'])) {
            $model->data = data\data::fromMap($map['Data']);
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UsageMap'])) {
            $model->usageMap = usageMap::fromMap($map['UsageMap']);
        }

        return $model;
    }
}
