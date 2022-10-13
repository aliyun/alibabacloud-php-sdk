<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class SubmitDiagnoseTaskForSingleCardRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var int
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'beginTime'                => 'BeginTime',
        'destination'              => 'Destination',
        'endTime'                  => 'EndTime',
        'regionNo'                 => 'RegionNo',
        'resourceUid'              => 'ResourceUid',
        'source'                   => 'Source',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDiagnoseTaskForSingleCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
