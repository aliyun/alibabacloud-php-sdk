<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponseBody\content;

use AlibabaCloud\Tea\Model;

class realtimeLogDeliveryInfo extends Model
{
    /**
     * @description The ID of the domain name.
     *
     * @example 1001010
     *
     * @var int
     */
    public $dmId;

    /**
     * @description The streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The status of real-time log delivery. Valid values:
     *
     *   **online**: enabled
     *   **offline**: disabled
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'dmId' => 'DmId',
        'domainName' => 'DomainName',
        'logstore' => 'Logstore',
        'project' => 'Project',
        'region' => 'Region',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dmId) {
            $res['DmId'] = $this->dmId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeLogDeliveryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DmId'])) {
            $model->dmId = $map['DmId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
