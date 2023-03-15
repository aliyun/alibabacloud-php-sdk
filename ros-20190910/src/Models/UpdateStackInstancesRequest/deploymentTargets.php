<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesRequest;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
     * @description The IDs of the members in the resource directory. You can specify up to 20 member IDs.
     *
     * >  To view the member IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the detailed information of a member](~~111624~~).
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The IDs of the folders in the resource directory. You can specify up to five folder IDs.
     *
     * You must specify at least one of the RdFolderIds and AccountIds parameters. The parameters are subject to the following rules:
     *
     *   If you specify only the RdFolderIds parameter, stacks are deployed within all members in the specified folders. If you select the Root folder, stacks are deployed within all members in the resource directory.
     *   If you specify only the AccountIds parameter, stacks are deployed within the specified members.
     *   If you specify both parameters, the accounts specified by using the AccountIds parameter must be contained in the folders specified by using the RdFolderIds parameter. In this case, stacks are deployed within the specified members that are contained in the specified folders.
     *
     * >  To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information of a folder](~~111223~~).
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
