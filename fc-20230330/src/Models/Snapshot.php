<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Snapshot extends Model
{
    /**
     * @var int
     */
    public $artifactDiskUsedSizeInB;

    /**
     * @var int
     */
    public $artifactMemUsedSizeInB;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $diskSizeMB;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string
     */
    public $imageRepository;

    /**
     * @var int
     */
    public $memoryMB;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $readyCommand;

    /**
     * @var string
     */
    public $resolvedVersion;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $sourceSessionId;

    /**
     * @var string
     */
    public $startCommand;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'artifactDiskUsedSizeInB' => 'artifactDiskUsedSizeInB',
        'artifactMemUsedSizeInB' => 'artifactMemUsedSizeInB',
        'cpu' => 'cpu',
        'createdTime' => 'createdTime',
        'description' => 'description',
        'diskSizeMB' => 'diskSizeMB',
        'envs' => 'envs',
        'expiredTime' => 'expiredTime',
        'functionName' => 'functionName',
        'imageDigest' => 'imageDigest',
        'imageRepository' => 'imageRepository',
        'memoryMB' => 'memoryMB',
        'osType' => 'osType',
        'qualifier' => 'qualifier',
        'readyCommand' => 'readyCommand',
        'resolvedVersion' => 'resolvedVersion',
        'snapshotId' => 'snapshotId',
        'sourceSessionId' => 'sourceSessionId',
        'startCommand' => 'startCommand',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactDiskUsedSizeInB) {
            $res['artifactDiskUsedSizeInB'] = $this->artifactDiskUsedSizeInB;
        }

        if (null !== $this->artifactMemUsedSizeInB) {
            $res['artifactMemUsedSizeInB'] = $this->artifactMemUsedSizeInB;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->diskSizeMB) {
            $res['diskSizeMB'] = $this->diskSizeMB;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['envs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->imageDigest) {
            $res['imageDigest'] = $this->imageDigest;
        }

        if (null !== $this->imageRepository) {
            $res['imageRepository'] = $this->imageRepository;
        }

        if (null !== $this->memoryMB) {
            $res['memoryMB'] = $this->memoryMB;
        }

        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->readyCommand) {
            $res['readyCommand'] = $this->readyCommand;
        }

        if (null !== $this->resolvedVersion) {
            $res['resolvedVersion'] = $this->resolvedVersion;
        }

        if (null !== $this->snapshotId) {
            $res['snapshotId'] = $this->snapshotId;
        }

        if (null !== $this->sourceSessionId) {
            $res['sourceSessionId'] = $this->sourceSessionId;
        }

        if (null !== $this->startCommand) {
            $res['startCommand'] = $this->startCommand;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['artifactDiskUsedSizeInB'])) {
            $model->artifactDiskUsedSizeInB = $map['artifactDiskUsedSizeInB'];
        }

        if (isset($map['artifactMemUsedSizeInB'])) {
            $model->artifactMemUsedSizeInB = $map['artifactMemUsedSizeInB'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['diskSizeMB'])) {
            $model->diskSizeMB = $map['diskSizeMB'];
        }

        if (isset($map['envs'])) {
            if (!empty($map['envs'])) {
                $model->envs = [];
                foreach ($map['envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
        }

        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['imageDigest'])) {
            $model->imageDigest = $map['imageDigest'];
        }

        if (isset($map['imageRepository'])) {
            $model->imageRepository = $map['imageRepository'];
        }

        if (isset($map['memoryMB'])) {
            $model->memoryMB = $map['memoryMB'];
        }

        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['readyCommand'])) {
            $model->readyCommand = $map['readyCommand'];
        }

        if (isset($map['resolvedVersion'])) {
            $model->resolvedVersion = $map['resolvedVersion'];
        }

        if (isset($map['snapshotId'])) {
            $model->snapshotId = $map['snapshotId'];
        }

        if (isset($map['sourceSessionId'])) {
            $model->sourceSessionId = $map['sourceSessionId'];
        }

        if (isset($map['startCommand'])) {
            $model->startCommand = $map['startCommand'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
