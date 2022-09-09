<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsResponseBody;

use AlibabaCloud\Tea\Model;

class projectBuilds extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectBuildAction;

    /**
     * @var string
     */
    public $projectBuildId;

    /**
     * @var int
     */
    public $projectBuildIndex;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'createTime'         => 'createTime',
        'projectBuildAction' => 'projectBuildAction',
        'projectBuildId'     => 'projectBuildId',
        'projectBuildIndex'  => 'projectBuildIndex',
        'projectId'          => 'projectId',
        'status'             => 'status',
        'timestamp'          => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->projectBuildAction) {
            $res['projectBuildAction'] = $this->projectBuildAction;
        }
        if (null !== $this->projectBuildId) {
            $res['projectBuildId'] = $this->projectBuildId;
        }
        if (null !== $this->projectBuildIndex) {
            $res['projectBuildIndex'] = $this->projectBuildIndex;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectBuilds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['projectBuildAction'])) {
            $model->projectBuildAction = $map['projectBuildAction'];
        }
        if (isset($map['projectBuildId'])) {
            $model->projectBuildId = $map['projectBuildId'];
        }
        if (isset($map['projectBuildIndex'])) {
            $model->projectBuildIndex = $map['projectBuildIndex'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
