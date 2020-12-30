<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class StartRestoreTaskRequest extends Model
{
    /**
     * @var string
     */
    public $restoreTaskId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'restoreTaskId' => 'RestoreTaskId',
        'ownerId'       => 'OwnerId',
        'clientToken'   => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreTaskId) {
            $res['RestoreTaskId'] = $this->restoreTaskId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRestoreTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreTaskId'])) {
            $model->restoreTaskId = $map['RestoreTaskId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
