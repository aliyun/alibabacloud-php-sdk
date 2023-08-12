<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest;

use AlibabaCloud\Tea\Model;

class autoDeployment extends Model
{
    /**
     * @description Indicates whether automatic deployment is enabled.
     *
     * Valid values:
     *
     *   true: Automatic deployment is enabled. If you add a member account to the folder to which the stack group belongs after you enable automatic deployment, ROS automatically adds the stacks in the stack group to the member account. If you remove a member account from the folder, ROS automatically deletes the stacks from the member account.
     *   false: Automatic deployment is disabled. After you disable automatic deployment, the stacks remain unchanged when you add member accounts to or remove member accounts from the folder.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether the stacks within a member account are retained when you remove the member account from the folder.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * > You must specify RetainStacksOnAccountRemoval if Enabled is set to true.
     * @example true
     *
     * @var bool
     */
    public $retainStacksOnAccountRemoval;
    protected $_name = [
        'enabled'                      => 'Enabled',
        'retainStacksOnAccountRemoval' => 'RetainStacksOnAccountRemoval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->retainStacksOnAccountRemoval) {
            $res['RetainStacksOnAccountRemoval'] = $this->retainStacksOnAccountRemoval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoDeployment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['RetainStacksOnAccountRemoval'])) {
            $model->retainStacksOnAccountRemoval = $map['RetainStacksOnAccountRemoval'];
        }

        return $model;
    }
}
