<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest;

use AlibabaCloud\Tea\Model;

class groupInfo extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'groupId'   => 'groupId',
        'projectId' => 'projectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        return $model;
    }
}
