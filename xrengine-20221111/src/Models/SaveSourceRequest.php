<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class SaveSourceRequest extends Model
{
    /**
     * @var bool
     */
    public $changeStatus;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var bool
     */
    public $needCheck;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'changeStatus' => 'ChangeStatus',
        'jwtToken' => 'JwtToken',
        'needCheck' => 'NeedCheck',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeStatus) {
            $res['ChangeStatus'] = $this->changeStatus;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->needCheck) {
            $res['NeedCheck'] = $this->needCheck;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ChangeStatus'])) {
            $model->changeStatus = $map['ChangeStatus'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['NeedCheck'])) {
            $model->needCheck = $map['NeedCheck'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
