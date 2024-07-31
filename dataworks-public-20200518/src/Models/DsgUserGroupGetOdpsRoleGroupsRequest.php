<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgUserGroupGetOdpsRoleGroupsRequest extends Model
{
    /**
     * @description The name of the MaxCompute project. You can call the [DsgPlatformQueryProjectsAndSchemaFromMeta](https://help.aliyun.com/document_detail/2786303.html) operation to query a list of MaxCompute projects.
     *
     * This parameter is required.
     * @example test_project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgUserGroupGetOdpsRoleGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
