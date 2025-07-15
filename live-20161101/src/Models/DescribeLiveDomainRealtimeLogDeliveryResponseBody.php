<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRealtimeLogDeliveryResponseBody extends Model
{
    /**
     * @description The name of the Logstore to which log entries are delivered.
     *
     * @example logstore_example
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery.
     *
     * @example project_example
     *
     * @var string
     */
    public $project;

    /**
     * @description The ID of the region where the Log Service project is deployed.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The request ID.
     *
     * @example 2F8F3852-912F-42AC-80EB-F1CF4284DE93
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of real-time log delivery. Valid values:
     *
     *   online: Real-time log delivery is enabled.
     *   offline: Real-time log delivery is disabled.
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'logstore' => 'Logstore',
        'project' => 'Project',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRealtimeLogDeliveryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
