<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;

use AlibabaCloud\Tea\Model;

class autoDeployment extends Model
{
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
    public $enabled;

    /**
     * @description The folder IDs of the resource directory. This parameter is used to deploy stack instances within all the accounts in the folders.
     *
     * >  This parameter is returned only when the PermissionModel parameter is set to SERVICE_MANAGED.
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
