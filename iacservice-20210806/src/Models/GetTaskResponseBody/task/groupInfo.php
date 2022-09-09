<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponseBody\task;

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
    public $groupName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'groupId'     => 'groupId',
        'groupName'   => 'groupName',
        'projectId'   => 'projectId',
        'projectName' => 'projectName',
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
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
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
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        return $model;
    }
}
