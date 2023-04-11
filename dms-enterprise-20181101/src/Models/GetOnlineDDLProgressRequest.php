<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetOnlineDDLProgressRequest extends Model
{
    /**
     * @description The ID of the OnlineDDL SQL task details. You can call the [ListDBTaskSQLJobDetail](~~207073~~) operation to obtain the task detail ID.
     *
     * @example 15***
     *
     * @var int
     */
    public $jobDetailId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](~~181330~~) topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobDetailId' => 'JobDetailId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobDetailId) {
            $res['JobDetailId'] = $this->jobDetailId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOnlineDDLProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobDetailId'])) {
            $model->jobDetailId = $map['JobDetailId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
