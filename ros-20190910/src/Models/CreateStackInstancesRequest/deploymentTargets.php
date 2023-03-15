<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
     * @description The IDs of the folders in the resource directory. You can add up to five folder IDs.
     *
     * You can create stacks within all members in the specified folders. If you create stacks in the Root folder, the stacks are created within all members in the resource directory.
     *
     * >  To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information of a folder](~~111223~~).
     * @var string[]
     */
    public $rdFolderIds;
    protected $_name = [
        'rdFolderIds' => 'RdFolderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = $map['RdFolderIds'];
            }
        }

        return $model;
    }
}
