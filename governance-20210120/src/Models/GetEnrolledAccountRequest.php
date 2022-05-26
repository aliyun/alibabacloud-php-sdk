<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Tea\Model;

class GetEnrolledAccountRequest extends Model
{
    /**
     * @description 账号ID
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountUid' => 'AccountUid',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnrolledAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
