<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\QuotaUser\resources;
use AlibabaCloud\Tea\Model;

class QuotaUser extends Model
{
    /**
     * @var resources
     */
    public $resources;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var int
     */
    public $workloadCount;
    protected $_name = [
        'resources'     => 'Resources',
        'userId'        => 'UserId',
        'username'      => 'Username',
        'workloadCount' => 'WorkloadCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workloadCount) {
            $res['WorkloadCount'] = $this->workloadCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkloadCount'])) {
            $model->workloadCount = $map['WorkloadCount'];
        }

        return $model;
    }
}
