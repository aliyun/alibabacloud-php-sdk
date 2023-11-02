<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeEntityInfoRequest extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $entityId;

    /**
     * @example test22.php
     *
     * @var string
     */
    public $entityIdentity;

    /**
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 577bbf90-a770-44a7-8154-586aa2d318fa
     *
     * @var string
     */
    public $sophonTaskId;
    protected $_name = [
        'entityId'       => 'EntityId',
        'entityIdentity' => 'EntityIdentity',
        'incidentUuid'   => 'IncidentUuid',
        'regionId'       => 'RegionId',
        'sophonTaskId'   => 'SophonTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityIdentity) {
            $res['EntityIdentity'] = $this->entityIdentity;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sophonTaskId) {
            $res['SophonTaskId'] = $this->sophonTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEntityInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityIdentity'])) {
            $model->entityIdentity = $map['EntityIdentity'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }

        return $model;
    }
}
