<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;

use AlibabaCloud\Tea\Model;

class autoDeployment extends Model
{
    /**
     * @description Indicates whether automatic deployment is enabled.
     *
     * Valid values:
     *
     *   true: Automatic deployment is enabled. If a member account is added to the folder to which the stack group belongs after automatic deployment is enabled, the stack group deploys its stack instances in the specified region where the added account is deployed. If the account is deleted from the folder, the stack instances in the specified region are deleted from the stack group.
     *   false: Automatic deployment is disabled. After automatic deployment is disabled, the stack instances remain unchanged when the member account in the folder is changed.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether stacks in the member account are retained when the member account is deleted from the folder.
     *
     * Valid values:
     *
     *   true: The stacks are retained.
     *   false: The stacks are deleted.
     *
     * >  This parameter is returned only when the Enabled parameter is set to true.
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
