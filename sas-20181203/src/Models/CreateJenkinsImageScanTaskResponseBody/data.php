<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateJenkinsImageScanTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $imageScanCapacity;
    /**
     * @var string
     */
    public $repoId;
    /**
     * @var string
     */
    public $repoInstanceId;
    /**
     * @var string
     */
    public $repoRegionId;
    /**
     * @var string
     */
    public $taskId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
