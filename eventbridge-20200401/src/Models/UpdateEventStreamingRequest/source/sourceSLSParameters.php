<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceSLSParameters extends Model
{
    /**
     * @description The role name. If you want to authorize EventBridge to use this role to read logs in Simple Log Service, you must select Alibaba Cloud Service for Selected Trusted Entity and EventBridge for Select Trusted Service when you create the role in the Resource Access Management (RAM) console.
     *
     * @example testRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceSLSParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
