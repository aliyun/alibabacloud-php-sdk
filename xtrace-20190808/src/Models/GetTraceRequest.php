<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetTraceRequest extends Model
{
    /**
     * @description The type of the application. You can leave this parameter empty or set this parameter to `XTRACE`. We recommend that you leave this parameter empty.
     *
     *   If you leave this parameter empty, traces reported to Managed Service for OpenTelemetry and Application Real-Time Monitoring Service (ARMS) can be queried.
     *   If you set this parameter to `XTRACE`, only traces reported to Managed Service for OpenTelemetry can be queried.
     *
     * @example XTRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The trace ID, which is the unique identifier of the trace.
     *
     * You can obtain the trace ID on the **Trace Explorer** page in the Managed Service for OpenTelemetry console or by calling the [SearchTraces](https://help.aliyun.com/document_detail/2399674.html~) operation.
     *
     * This parameter is required.
     * @example 1c6881aab84191a4
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'appType'    => 'AppType',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'traceID'    => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
