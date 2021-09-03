<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class deploymentTargets extends Model
{
    /**
     * @var string[]
     */
    public $rdFolderIds;

    /**
     * @var string[]
     */
    public $accountIds;
    protected $_name = [
        'rdFolderIds' => 'RdFolderIds',
        'accountIds'  => 'AccountIds',
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
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }

        return $model;
    }
}
