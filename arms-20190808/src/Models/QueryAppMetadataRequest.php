<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryAppMetadataRequest extends Model
{
    /**
     * @description The metadata IDs. Separate multiple IDs with commas (,).
     *
     * You can obtain the exception ID on the **Exception Analysis** page of your application in the ARMS console.
     *
     * This parameter is required.
     * @example 4c9dd447,3c76c565
     *
     * @var string
     */
    public $metaIds;

    /**
     * @description The metadata type. Valid values:
     *
     *   sql: obtains an SQL statement based on sqlId.
     *   exception: obtains the exception stack based on exceptionId.
     *
     * This parameter is required.
     * @example sql
     *
     * @var string
     */
    public $metaType;

    /**
     * @description The process identifier (PID) of the application. You can obtain the PID of an application by calling the **ListTraceApps** operation.
     *
     * This parameter is required.
     * @example ggxw4lnjuz@54364d85b97dc56
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'metaIds'  => 'MetaIds',
        'metaType' => 'MetaType',
        'pid'      => 'Pid',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaIds) {
            $res['MetaIds'] = $this->metaIds;
        }
        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAppMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaIds'])) {
            $model->metaIds = $map['MetaIds'];
        }
        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
