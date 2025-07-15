<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveRealtimeLogDeliveryDomainsRequest extends Model
{
    /**
     * @description The name of the Logstore to which log entries are delivered.
     *
     * This parameter is required.
     *
     * @example logstore_example
     *
     * @var string
     */
    public $logstore;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery.
     *
     * This parameter is required.
     *
     * @example project_example
     *
     * @var string
     */
    public $project;

    /**
     * @description The ID of the region where the Log Service project is deployed.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logstore' => 'Logstore',
        'ownerId' => 'OwnerId',
        'project' => 'Project',
        'region' => 'Region',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRealtimeLogDeliveryDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
