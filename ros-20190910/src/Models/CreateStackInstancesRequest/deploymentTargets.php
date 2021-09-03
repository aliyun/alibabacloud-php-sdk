<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
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
