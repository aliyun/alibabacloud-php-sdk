<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteGroupMonitoringAgentProcessRequest extends Model
{
    /**
     * @description The ID of the application group.
     *
     * @example 123456
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the process monitoring task.
     *
     * @example 48F83746-C817-478C-9B06-7158F56B****
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId'  => 'GroupId',
        'id'       => 'Id',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGroupMonitoringAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
