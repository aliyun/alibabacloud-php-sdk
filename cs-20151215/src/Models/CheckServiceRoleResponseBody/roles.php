<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleResponseBody;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description Indicates whether the service role is assigned to ACK.
     *
     * Valid values:
     *
     *   true: The role is assigned to ACK.
     *   false: The role is not assigned to ACK.
     *
     * @example true
     *
     * @var bool
     */
    public $granted;

    /**
     * @description The message that is displayed for a role that is not assigned to ACK.
     *
     * @example The role does not exist: AliyunCSManagedAutoScalerRole
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the service role.
     *
     * @example AliyunCSManagedAutoScalerRole
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'granted' => 'granted',
        'message' => 'message',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->granted) {
            $res['granted'] = $this->granted;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['granted'])) {
            $model->granted = $map['granted'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
