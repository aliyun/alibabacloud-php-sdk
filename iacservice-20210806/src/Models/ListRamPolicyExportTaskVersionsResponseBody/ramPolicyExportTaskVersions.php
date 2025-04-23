<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTaskVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class ramPolicyExportTaskVersions extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $exportVersion;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $ramPolicyExportTaskId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'createTime',
        'elapsedTime' => 'elapsedTime',
        'exportVersion' => 'exportVersion',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'ramPolicyExportTaskId' => 'ramPolicyExportTaskId',
        'status' => 'status',
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

        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->exportVersion) {
            $res['exportVersion'] = $this->exportVersion;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->ramPolicyExportTaskId) {
            $res['ramPolicyExportTaskId'] = $this->ramPolicyExportTaskId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
        }

        if (isset($map['exportVersion'])) {
            $model->exportVersion = $map['exportVersion'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['ramPolicyExportTaskId'])) {
            $model->ramPolicyExportTaskId = $map['ramPolicyExportTaskId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
