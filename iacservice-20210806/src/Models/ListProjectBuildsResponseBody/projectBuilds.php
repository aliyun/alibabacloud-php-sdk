<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsResponseBody;

use AlibabaCloud\Dara\Model;

class projectBuilds extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

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
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'createTime' => 'createTime',
        'endTime' => 'endTime',
        'projectBuildAction' => 'projectBuildAction',
        'projectBuildId' => 'projectBuildId',
        'projectBuildIndex' => 'projectBuildIndex',
        'projectId' => 'projectId',
        'status' => 'status',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'timestamp' => 'timestamp',
        'triggerStrategy' => 'triggerStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
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

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
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

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}
