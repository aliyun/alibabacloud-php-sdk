<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ManageSchedulerxJobSyncShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $jobIdListShrink;

    /**
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description This parameter is required.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $originalGroupId;

    /**
     * @description This parameter is required.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $originalNamespace;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example testSyncJobGroup
     *
     * @var string
     */
    public $targetGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 5f56ef65-b836-493d-b40b-c4db6425****
     *
     * @var string
     */
    public $targetNamespace;
    protected $_name = [
        'jobIdListShrink' => 'JobIdList',
        'namespaceSource' => 'NamespaceSource',
        'originalGroupId' => 'OriginalGroupId',
        'originalNamespace' => 'OriginalNamespace',
        'regionId' => 'RegionId',
        'targetGroupId' => 'TargetGroupId',
        'targetNamespace' => 'TargetNamespace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobIdListShrink) {
            $res['JobIdList'] = $this->jobIdListShrink;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->originalGroupId) {
            $res['OriginalGroupId'] = $this->originalGroupId;
        }
        if (null !== $this->originalNamespace) {
            $res['OriginalNamespace'] = $this->originalNamespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetGroupId) {
            $res['TargetGroupId'] = $this->targetGroupId;
        }
        if (null !== $this->targetNamespace) {
            $res['TargetNamespace'] = $this->targetNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageSchedulerxJobSyncShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobIdList'])) {
            $model->jobIdListShrink = $map['JobIdList'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['OriginalGroupId'])) {
            $model->originalGroupId = $map['OriginalGroupId'];
        }
        if (isset($map['OriginalNamespace'])) {
            $model->originalNamespace = $map['OriginalNamespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetGroupId'])) {
            $model->targetGroupId = $map['TargetGroupId'];
        }
        if (isset($map['TargetNamespace'])) {
            $model->targetNamespace = $map['TargetNamespace'];
        }

        return $model;
    }
}
