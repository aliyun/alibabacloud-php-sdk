<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The information about automatic deployment settings.
     *
     * >  This parameter is required only if the PermissionModel parameter is set to SERVICE_MANAGED.
     * @example usage
     *
     * @var string
     */
    public $key;

    /**
     * @description Specifies whether to enable automatic deployment.
     *
     * Valid values:
     *
     *   true: enables automatic deployment. If you add a member to the folder to which the stack group belongs after you enable automatic deployment, ROS automatically adds the stacks in the stack group to the member. If you remove a member from the folder, ROS automatically deletes the stacks from the member.
     *   false: disables automatic deployment. After you disable automatic deployment, the stacks remain unchanged when you change the members in the folder.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
