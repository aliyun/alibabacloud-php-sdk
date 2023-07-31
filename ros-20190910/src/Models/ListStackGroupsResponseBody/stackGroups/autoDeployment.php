<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups;

use AlibabaCloud\Tea\Model;

class autoDeployment extends Model
{
    /**
     * @description Indicates whether automatic deployment is enabled.
     *
     * Valid values:
     *
     *   true: Automatic deployment is enabled. If you add a member to the folder to which the stack group belongs after automatic deployment is enabled, Resource Orchestration Service (ROS) automatically adds the stack instances in the stack group to the specified region of the member. If you delete the member from the folder, ROS automatically deletes the stack instances in the stack group from the specified region of the member.
     *   false: Automatic deployment is disabled. After you disable automatic deployment, the stack instances remain unchanged when you change the member in the folder.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether the stacks within a member are retained when you delete the member from the folder.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * > This parameter is returned only if Enabled is set to true.
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
