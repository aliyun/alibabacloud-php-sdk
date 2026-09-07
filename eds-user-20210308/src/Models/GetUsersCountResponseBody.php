<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class GetUsersCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var int
     */
    public $maxUserNumber;

    /**
     * @var int
     */
    public $orgCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'groupCount' => 'GroupCount',
        'maxUserNumber' => 'MaxUserNumber',
        'orgCount' => 'OrgCount',
        'requestId' => 'RequestId',
        'userCount' => 'UserCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }

        if (null !== $this->maxUserNumber) {
            $res['MaxUserNumber'] = $this->maxUserNumber;
        }

        if (null !== $this->orgCount) {
            $res['OrgCount'] = $this->orgCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
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
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }

        if (isset($map['MaxUserNumber'])) {
            $model->maxUserNumber = $map['MaxUserNumber'];
        }

        if (isset($map['OrgCount'])) {
            $model->orgCount = $map['OrgCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
