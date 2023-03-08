<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityFollowerRequest extends Model
{
    /**
     * @description The ID of the subscription relationship between the partition filter expression and the subscriber. You can call the [GetQualityFollower](~~174000~~) operation to obtain the ID of the subscription relationship.
     *
     * @example 1234
     *
     * @var int
     */
    public $followerId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the compute engine or data source for which the partition filter expression is configured. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Monitoring Rules page of Data Quality to obtain the name.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'followerId'  => 'FollowerId',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->followerId) {
            $res['FollowerId'] = $this->followerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FollowerId'])) {
            $model->followerId = $map['FollowerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
