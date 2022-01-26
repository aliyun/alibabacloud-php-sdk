<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateComputeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmCodeList;

    /**
     * @var string
     */
    public $deviceCodeList;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $vcsId;
    protected $_name = [
        'algorithmCodeList' => 'AlgorithmCodeList',
        'deviceCodeList'    => 'DeviceCodeList',
        'projectId'         => 'ProjectId',
        'regionId'          => 'RegionId',
        'taskName'          => 'TaskName',
        'vcsId'             => 'VcsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmCodeList) {
            $res['AlgorithmCodeList'] = $this->algorithmCodeList;
        }
        if (null !== $this->deviceCodeList) {
            $res['DeviceCodeList'] = $this->deviceCodeList;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->vcsId) {
            $res['VcsId'] = $this->vcsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateComputeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmCodeList'])) {
            $model->algorithmCodeList = $map['AlgorithmCodeList'];
        }
        if (isset($map['DeviceCodeList'])) {
            $model->deviceCodeList = $map['DeviceCodeList'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['VcsId'])) {
            $model->vcsId = $map['VcsId'];
        }

        return $model;
    }
}
