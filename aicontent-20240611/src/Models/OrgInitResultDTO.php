<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class OrgInitResultDTO extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientUuid;

    /**
     * @var bool
     */
    public $isNew;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'apiKey' => 'apiKey',
        'clientId' => 'clientId',
        'clientUuid' => 'clientUuid',
        'isNew' => 'isNew',
        'orgId' => 'orgId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientUuid) {
            $res['clientUuid'] = $this->clientUuid;
        }

        if (null !== $this->isNew) {
            $res['isNew'] = $this->isNew;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientUuid'])) {
            $model->clientUuid = $map['clientUuid'];
        }

        if (isset($map['isNew'])) {
            $model->isNew = $map['isNew'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
