<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRealtimeLogDeliveryResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'status'    => 'Status',
        'project'   => 'Project',
        'requestId' => 'RequestId',
        'logstore'  => 'Logstore',
        'region'    => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
