<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAuthorizedProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @example 1011
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 2
     *
     * @var int
     */
    public $role;
    protected $_name = [
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'role' => 'Role',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
