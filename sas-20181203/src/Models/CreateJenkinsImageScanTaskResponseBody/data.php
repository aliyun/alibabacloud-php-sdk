<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateJenkinsImageScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The quota for image scan.
     *
     * @example 100
     *
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-upze3gcopm9c****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The instance ID of the image repository.
     *
     * @example cri-0gkaatghnmnt****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @description The ID of the scan task.
     *
     * @example fc98d58eb56f699d49bf7ebbd6d7****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The UUID of the image asset.
     *
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'imageScanCapacity' => 'ImageScanCapacity',
        'repoId' => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoRegionId' => 'RepoRegionId',
        'taskId' => 'TaskId',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

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
