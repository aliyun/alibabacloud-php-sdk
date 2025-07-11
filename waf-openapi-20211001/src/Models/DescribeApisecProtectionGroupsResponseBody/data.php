<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionGroupsResponseBody;

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
     * @example 0
     *
     * @var int
     */
    public $reportStatus;

    /**
     * @description The name of the protected object group.
     *
     * @example group1
     *
     * @var string
     */
    public $resourceGroup;

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
        'resourceGroup' => 'ResourceGroup',
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
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
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
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['TraceStatus'])) {
            $model->traceStatus = $map['TraceStatus'];
        }

        return $model;
    }
}
