<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListResponseBody\data;

use AlibabaCloud\Tea\Model;

class annotationMissionTagInfoList extends Model
{
    /**
     * @var string
     */
    public $annotationMissionTagInfoDescription;

    /**
     * @example e1ee87ea-ebad-4079-aebb-1c56a4ef0c06
     *
     * @var string
     */
    public $annotationMissionTagInfoId;

    /**
     * @var string
     */
    public $annotationMissionTagInfoName;

    /**
     * @example false
     *
     * @var bool
     */
    public $delete;

    /**
     * @example 3c3b8d1d-deff-48d9-9318-addc80ae5b1e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example DING_ORG_dingbd9daecdb7aaed3bffe93478753d9884
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
