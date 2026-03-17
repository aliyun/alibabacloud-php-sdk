<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class GetSmartAGDpiAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $dpiMonitorStatus;

    /**
     * @var string
     */
    public $dpiStatus;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slsRegion;
    protected $_name = [
        'dpiMonitorStatus' => 'DpiMonitorStatus',
        'dpiStatus' => 'DpiStatus',
        'logstoreName' => 'LogstoreName',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
        'slsRegion' => 'SlsRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiMonitorStatus) {
            $res['DpiMonitorStatus'] = $this->dpiMonitorStatus;
        }

        if (null !== $this->dpiStatus) {
            $res['DpiStatus'] = $this->dpiStatus;
        }

        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slsRegion) {
            $res['SlsRegion'] = $this->slsRegion;
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
        if (isset($map['DpiMonitorStatus'])) {
            $model->dpiMonitorStatus = $map['DpiMonitorStatus'];
        }

        if (isset($map['DpiStatus'])) {
            $model->dpiStatus = $map['DpiStatus'];
        }

        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlsRegion'])) {
            $model->slsRegion = $map['SlsRegion'];
        }

        return $model;
    }
}
