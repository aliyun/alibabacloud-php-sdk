<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
     * @description The IDs of the members in the resource directory.
     *
     * > This parameter is returned only if AccountIds is specified when the [UpdateStackInstances](~~151716~~) operation is called to update stack instances.
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The IDs of the folders in the resource directory.
     *
     * @var string[]
     */
    public $rdFolderIds;
    protected $_name = [
        'accountIds'  => 'AccountIds',
        'rdFolderIds' => 'RdFolderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->rdFolderIds) {
            $res['RdFolderIds'] = $this->rdFolderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = $map['RdFolderIds'];
            }
        }

        return $model;
    }
}
