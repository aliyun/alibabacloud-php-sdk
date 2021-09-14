<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $dbfsLinkedRole;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId'      => 'AccountId',
        'requestId'      => 'RequestId',
        'dbfsLinkedRole' => 'DbfsLinkedRole',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dbfsLinkedRole) {
            $res['DbfsLinkedRole'] = $this->dbfsLinkedRole;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DbfsLinkedRole'])) {
            $model->dbfsLinkedRole = $map['DbfsLinkedRole'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
