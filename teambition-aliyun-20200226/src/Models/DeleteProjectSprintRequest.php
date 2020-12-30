<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class DeleteProjectSprintRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $sprintId;
    protected $_name = [
        'orgId'    => 'OrgId',
        'sprintId' => 'SprintId',
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
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProjectSprintRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }

        return $model;
    }
}
