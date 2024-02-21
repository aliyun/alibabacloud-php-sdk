<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesRequest;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
     * @description The IDs of the execution accounts within which you want to deploy stacks in self-managed mode. You can specify up to 20 execution account IDs.
     *
     * > To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information about a folder](~~111223~~).
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The IDs of the folders in the resource directory. You can add up to five folder IDs.
     *
     * You can create stacks within all the member accounts in the specified folders. If you create stacks in the Root folder, the stacks are created within all member accounts in the resource directory.
     *
     * > To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information about a folder](~~111223~~).
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
