<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The switch of the API security module.
     *
     * @example 1
     *
     * @var int
     */
    public $apisecStatus;

    /**
     * @description The switch of the compliance check feature.
     *
     * @example 1
     *
     * @var int
     */
    public $reportStatus;

    /**
     * @description The protected object.
     *
     * @example cwaf-***-waf
     *
     * @var string
     */
    public $resource;

    /**
     * @description The switch of the tracing and auditing feature.
     *
     * @example 0
     *
     * @var int
     */
    public $traceStatus;
    protected $_name = [
        'apisecStatus' => 'ApisecStatus',
        'reportStatus' => 'ReportStatus',
        'resource' => 'Resource',
        'traceStatus' => 'TraceStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apisecStatus) {
            $res['ApisecStatus'] = $this->apisecStatus;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->traceStatus) {
            $res['TraceStatus'] = $this->traceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApisecStatus'])) {
            $model->apisecStatus = $map['ApisecStatus'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['TraceStatus'])) {
            $model->traceStatus = $map['TraceStatus'];
        }

        return $model;
    }
}
