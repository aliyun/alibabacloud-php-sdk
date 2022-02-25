<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateJenkinsImageScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 镜像扫描授权数目
     *
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @description repoId
     *
     * @var string
     */
    public $repoId;

    /**
     * @description 镜像仓实例id
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description 镜像仓regionId
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @description 扫描任务 id
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 资产 uuid
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'imageScanCapacity' => 'ImageScanCapacity',
        'repoId'            => 'RepoId',
        'repoInstanceId'    => 'RepoInstanceId',
        'repoRegionId'      => 'RepoRegionId',
        'taskId'            => 'TaskId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
