<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListPortalMenusRequest extends Model
{
    /**
     * @var string
     */
    public $dataPortalId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dataPortalId' => 'DataPortalId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPortalId) {
            $res['DataPortalId'] = $this->dataPortalId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DataPortalId'])) {
            $model->dataPortalId = $map['DataPortalId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
