<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody\uises;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody\uises\uis\uisNodeIds;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody\uises\uis\userInfo;
use AlibabaCloud\Tea\Model;

class uis extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uisId;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var userInfo
     */
    public $userInfo;

    /**
     * @var string
     */
    public $sslClientCertUrl;

    /**
     * @var int
     */
    public $connectionCount;

    /**
     * @var uisNodeIds
     */
    public $uisNodeIds;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $serviceRegion;

    /**
     * @var int
     */
    public $connectionBandwidth;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'              => 'Status',
        'uisId'               => 'UisId',
        'connectionType'      => 'ConnectionType',
        'bandwidthType'       => 'BandwidthType',
        'createTime'          => 'CreateTime',
        'chargeType'          => 'ChargeType',
        'payType'             => 'PayType',
        'userInfo'            => 'UserInfo',
        'sslClientCertUrl'    => 'SslClientCertUrl',
        'connectionCount'     => 'ConnectionCount',
        'uisNodeIds'          => 'UisNodeIds',
        'endTime'             => 'EndTime',
        'bandwidth'           => 'Bandwidth',
        'description'         => 'Description',
        'serviceRegion'       => 'ServiceRegion',
        'connectionBandwidth' => 'ConnectionBandwidth',
        'businessStatus'      => 'BusinessStatus',
        'name'                => 'Name',
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
        if (null !== $this->uisId) {
            $res['UisId'] = $this->uisId;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->sslClientCertUrl) {
            $res['SslClientCertUrl'] = $this->sslClientCertUrl;
        }
        if (null !== $this->connectionCount) {
            $res['ConnectionCount'] = $this->connectionCount;
        }
        if (null !== $this->uisNodeIds) {
            $res['UisNodeIds'] = null !== $this->uisNodeIds ? $this->uisNodeIds->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->serviceRegion) {
            $res['ServiceRegion'] = $this->serviceRegion;
        }
        if (null !== $this->connectionBandwidth) {
            $res['ConnectionBandwidth'] = $this->connectionBandwidth;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UisId'])) {
            $model->uisId = $map['UisId'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }
        if (isset($map['SslClientCertUrl'])) {
            $model->sslClientCertUrl = $map['SslClientCertUrl'];
        }
        if (isset($map['ConnectionCount'])) {
            $model->connectionCount = $map['ConnectionCount'];
        }
        if (isset($map['UisNodeIds'])) {
            $model->uisNodeIds = uisNodeIds::fromMap($map['UisNodeIds']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ServiceRegion'])) {
            $model->serviceRegion = $map['ServiceRegion'];
        }
        if (isset($map['ConnectionBandwidth'])) {
            $model->connectionBandwidth = $map['ConnectionBandwidth'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
