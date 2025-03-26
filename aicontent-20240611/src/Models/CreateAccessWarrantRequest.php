<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class CreateAccessWarrantRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $requestSign;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $warrantAvailable;
    protected $_name = [
        'appId' => 'appId',
        'requestSign' => 'requestSign',
        'timestamp' => 'timestamp',
        'userClientIp' => 'userClientIp',
        'userId' => 'userId',
        'warrantAvailable' => 'warrantAvailable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->requestSign) {
            $res['requestSign'] = $this->requestSign;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->userClientIp) {
            $res['userClientIp'] = $this->userClientIp;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->warrantAvailable) {
            $res['warrantAvailable'] = $this->warrantAvailable;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['requestSign'])) {
            $model->requestSign = $map['requestSign'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['userClientIp'])) {
            $model->userClientIp = $map['userClientIp'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['warrantAvailable'])) {
            $model->warrantAvailable = $map['warrantAvailable'];
        }

        return $model;
    }
}
