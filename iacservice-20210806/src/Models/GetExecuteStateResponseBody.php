<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetExecuteStateResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var mixed[]
     */
    public $logFile;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'logFile' => 'logFile',
        'requestId' => 'requestId',
        'state' => 'state',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->logFile)) {
            Model::validateArray($this->logFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->logFile) {
            if (\is_array($this->logFile)) {
                $res['logFile'] = [];
                foreach ($this->logFile as $key1 => $value1) {
                    $res['logFile'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['logFile'])) {
            if (!empty($map['logFile'])) {
                $model->logFile = [];
                foreach ($map['logFile'] as $key1 => $value1) {
                    $model->logFile[$key1] = $value1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
