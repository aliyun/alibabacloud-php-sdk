<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class AddProjectMembersRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $members;
    protected $_name = [
        'orgId'     => 'OrgId',
        'projectId' => 'ProjectId',
        'members'   => 'Members',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->members) {
            $res['Members'] = $this->members;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProjectMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Members'])) {
            $model->members = $map['Members'];
        }

        return $model;
    }
}
