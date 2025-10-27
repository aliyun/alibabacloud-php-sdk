<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class ManageSchedulerxJobSyncShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $jobIdListShrink;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $originalGroupId;

    /**
     * @var string
     */
    public $originalNamespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $targetGroupId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
