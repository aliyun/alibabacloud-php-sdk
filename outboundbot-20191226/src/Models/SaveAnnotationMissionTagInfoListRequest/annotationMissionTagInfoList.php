<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionTagInfoListRequest;

use AlibabaCloud\Dara\Model;

class annotationMissionTagInfoList extends Model
{
    /**
     * @var string
     */
    public $annotationMissionTagInfoDescription;

    /**
     * @var string
     */
    public $annotationMissionTagInfoId;

    /**
     * @var string
     */
    public $annotationMissionTagInfoName;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var string
     */
    public $instanceId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
