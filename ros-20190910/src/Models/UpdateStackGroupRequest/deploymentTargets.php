<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
     * @description The IDs of the members in the resource directory. You can specify a maximum of 20 member IDs.
     *
     * >  To view the member IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the detailed information of a member](~~111624~~).
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The folder IDs in the resource directory. You can specify a maximum of five folder IDs.
     *
     * You must set at least one of the RdFolderIds and AccountIds parameters. The parameters are subject to the following items:
     *
     *   If you set only the RdFolderIds parameter, stacks are deployed within all the members in the specified folders. If you specify the Root folder, ROS deploys the stacks within all the members in the resource directory.
     *   If you set only the AccountIds parameter, stacks are deployed within the specified members.
     *   If you set both parameters, the accounts specified by AccountIds must be contained in the folders specified by RdFolderIds.
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
