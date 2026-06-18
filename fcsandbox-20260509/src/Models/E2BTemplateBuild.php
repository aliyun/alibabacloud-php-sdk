<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class E2BTemplateBuild extends Model
{
    /**
     * @var string
     */
    public $buildID;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $diskSizeMB;

    /**
     * @var string
     */
    public $envdVersion;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var int
     */
    public $memoryMB;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'buildID' => 'buildID',
        'cpuCount' => 'cpuCount',
        'createdAt' => 'createdAt',
        'diskSizeMB' => 'diskSizeMB',
        'envdVersion' => 'envdVersion',
        'finishedAt' => 'finishedAt',
        'memoryMB' => 'memoryMB',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildID) {
            $res['buildID'] = $this->buildID;
        }

        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->diskSizeMB) {
            $res['diskSizeMB'] = $this->diskSizeMB;
        }

        if (null !== $this->envdVersion) {
            $res['envdVersion'] = $this->envdVersion;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->memoryMB) {
            $res['memoryMB'] = $this->memoryMB;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['buildID'])) {
            $model->buildID = $map['buildID'];
        }

        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['diskSizeMB'])) {
            $model->diskSizeMB = $map['diskSizeMB'];
        }

        if (isset($map['envdVersion'])) {
            $model->envdVersion = $map['envdVersion'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['memoryMB'])) {
            $model->memoryMB = $map['memoryMB'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
