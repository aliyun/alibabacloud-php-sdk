<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GetUserIdByUserExternalIdRequest extends Model
{
    /**
     * @var string
     */
    public $userExternalId;

    /**
     * @var string
     */
    public $userSourceId;

    /**
     * @var string
     */
    public $userSourceType;
    protected $_name = [
        'userExternalId' => 'userExternalId',
        'userSourceId' => 'userSourceId',
        'userSourceType' => 'userSourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }

        if (null !== $this->userSourceId) {
            $res['userSourceId'] = $this->userSourceId;
        }

        if (null !== $this->userSourceType) {
            $res['userSourceType'] = $this->userSourceType;
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
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }

        if (isset($map['userSourceId'])) {
            $model->userSourceId = $map['userSourceId'];
        }

        if (isset($map['userSourceType'])) {
            $model->userSourceType = $map['userSourceType'];
        }

        return $model;
    }
}
