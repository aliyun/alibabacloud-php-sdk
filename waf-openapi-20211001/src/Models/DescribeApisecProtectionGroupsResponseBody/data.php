<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecProtectionGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $apisecStatus;

    /**
     * @var int
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var int
     */
    public $traceStatus;
    protected $_name = [
        'apisecStatus' => 'ApisecStatus',
        'reportStatus' => 'ReportStatus',
        'resourceGroup' => 'ResourceGroup',
        'traceStatus' => 'TraceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
