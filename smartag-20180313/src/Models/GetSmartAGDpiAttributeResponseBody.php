<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GetSmartAGDpiAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $slsRegion;

    /**
     * @var string
     */
    public $dpiMonitorStatus;

    /**
     * @var string
     */
    public $dpiStatus;
    protected $_name = [
        'logstoreName'     => 'LogstoreName',
        'requestId'        => 'RequestId',
        'projectName'      => 'ProjectName',
        'slsRegion'        => 'SlsRegion',
        'dpiMonitorStatus' => 'DpiMonitorStatus',
        'dpiStatus'        => 'DpiStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->slsRegion) {
            $res['SlsRegion'] = $this->slsRegion;
        }
        if (null !== $this->dpiMonitorStatus) {
            $res['DpiMonitorStatus'] = $this->dpiMonitorStatus;
        }
        if (null !== $this->dpiStatus) {
            $res['DpiStatus'] = $this->dpiStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmartAGDpiAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SlsRegion'])) {
            $model->slsRegion = $map['SlsRegion'];
        }
        if (isset($map['DpiMonitorStatus'])) {
            $model->dpiMonitorStatus = $map['DpiMonitorStatus'];
        }
        if (isset($map['DpiStatus'])) {
            $model->dpiStatus = $map['DpiStatus'];
        }

        return $model;
    }
}
