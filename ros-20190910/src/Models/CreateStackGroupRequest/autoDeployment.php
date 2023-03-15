<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest;

use AlibabaCloud\Tea\Model;

class autoDeployment extends Model
{
    /**
     * @description Specifies whether to enable automatic deployment.
     *
     * Valid values:
     *
     *   true: enables automatic deployment. If you add a member to the folder to which the stack group belongs after you enable automatic deployment, ROS automatically adds the stacks in the stack group to the member. If you remove a member from the folder, ROS automatically deletes the stacks from the member.
     *   false: disables automatic deployment. After you disable automatic deployment, the stacks remain unchanged when you change the members in the folder.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Specifies whether to retain stacks within a member when you remove the member from the folder.
     *
     * Valid values:
     *
     *   true: retains the stacks.
     *   false: deletes the stacks.
     *
     * >  This parameter is required if the Enabled parameter is set to true.
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
