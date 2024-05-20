<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody\data;

use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @example c-1234
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ODPS.ODPS
     *
     * @var string
     */
    public $dbType;

    /**
     * @example dev_project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'dbType'      => 'DbType',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
