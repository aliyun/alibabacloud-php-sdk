<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionTagInfoListRequest;

use AlibabaCloud\Tea\Model;

class annotationMissionTagInfoList extends Model
{
    /**
     * @var string
     */
    public $annotationMissionTagInfoDescription;

    /**
     * @description tag id
     *
     * @var string
     */
    public $annotationMissionTagInfoId;

    /**
     * @var string
     */
    public $annotationMissionTagInfoName;

    /**
     * @example true
     *
     * @var bool
     */
    public $delete;

    /**
     * @example bdbff6a5-1f68-4b41-8d37-6ff805ce165a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example bdbff6a5-1f68-4b41-8d37-6ff805ce165a
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'annotationMissionTagInfoDescription' => 'AnnotationMissionTagInfoDescription',
        'annotationMissionTagInfoId' => 'AnnotationMissionTagInfoId',
        'annotationMissionTagInfoName' => 'AnnotationMissionTagInfoName',
        'delete' => 'Delete',
        'instanceId' => 'InstanceId',
        'tenantId' => 'TenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionTagInfoDescription) {
            $res['AnnotationMissionTagInfoDescription'] = $this->annotationMissionTagInfoDescription;
        }
        if (null !== $this->annotationMissionTagInfoId) {
            $res['AnnotationMissionTagInfoId'] = $this->annotationMissionTagInfoId;
        }
        if (null !== $this->annotationMissionTagInfoName) {
            $res['AnnotationMissionTagInfoName'] = $this->annotationMissionTagInfoName;
        }
        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotationMissionTagInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionTagInfoDescription'])) {
            $model->annotationMissionTagInfoDescription = $map['AnnotationMissionTagInfoDescription'];
        }
        if (isset($map['AnnotationMissionTagInfoId'])) {
            $model->annotationMissionTagInfoId = $map['AnnotationMissionTagInfoId'];
        }
        if (isset($map['AnnotationMissionTagInfoName'])) {
            $model->annotationMissionTagInfoName = $map['AnnotationMissionTagInfoName'];
        }
        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
