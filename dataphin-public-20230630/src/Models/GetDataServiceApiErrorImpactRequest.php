<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceApiErrorImpactRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30 20:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 102102
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataServiceApiErrorImpactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
