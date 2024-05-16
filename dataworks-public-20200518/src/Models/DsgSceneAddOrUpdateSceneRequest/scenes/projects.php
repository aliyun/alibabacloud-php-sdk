<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest\scenes;

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
        'clusterId'   => 'clusterId',
        'dbType'      => 'dbType',
        'projectName' => 'projectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->dbType) {
            $res['dbType'] = $this->dbType;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['dbType'])) {
            $model->dbType = $map['dbType'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        return $model;
    }
}
