<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetInternetTupleRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @example 1684373600099
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 112.74.XX.XX
     *
     * @var string
     */
    public $cloudIp;

    /**
     * @var string
     */
    public $cloudIsp;

    /**
     * @example 443
     *
     * @var string
     */
    public $cloudPort;

    /**
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @example 1684373700099
     *
     * @var int
     */
    public $endTime;

    /**
     * @example eip-sample*
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $instanceList;

    /**
     * @example ByteCount
     *
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $otherCity;

    /**
     * @var string
     */
    public $otherCountry;

    /**
     * @example 122.112.XX.XX
     *
     * @var string
     */
    public $otherIp;

    /**
     * @var string
     */
    public $otherIsp;

    /**
     * @example 40002
     *
     * @var string
     */
    public $otherPort;

    /**
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @example 10
     *
     * @var int
     */
    public $topN;

    /**
     * @example 1
     *
     * @var int
     */
    public $tupleType;

    /**
     * @example false
     *
     * @var bool
     */
    public $useMultiAccount;
    protected $_name = [
        'accountIds'      => 'AccountIds',
        'beginTime'       => 'BeginTime',
        'cloudIp'         => 'CloudIp',
        'cloudIsp'        => 'CloudIsp',
        'cloudPort'       => 'CloudPort',
        'direction'       => 'Direction',
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'instanceList'    => 'InstanceList',
        'orderBy'         => 'OrderBy',
        'otherCity'       => 'OtherCity',
        'otherCountry'    => 'OtherCountry',
        'otherIp'         => 'OtherIp',
        'otherIsp'        => 'OtherIsp',
        'otherPort'       => 'OtherPort',
        'protocol'        => 'Protocol',
        'regionId'        => 'RegionId',
        'sort'            => 'Sort',
        'topN'            => 'TopN',
        'tupleType'       => 'TupleType',
        'useMultiAccount' => 'UseMultiAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }
        if (null !== $this->cloudIsp) {
            $res['CloudIsp'] = $this->cloudIsp;
        }
        if (null !== $this->cloudPort) {
            $res['CloudPort'] = $this->cloudPort;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->otherCity) {
            $res['OtherCity'] = $this->otherCity;
        }
        if (null !== $this->otherCountry) {
            $res['OtherCountry'] = $this->otherCountry;
        }
        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }
        if (null !== $this->otherIsp) {
            $res['OtherIsp'] = $this->otherIsp;
        }
        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }
        if (null !== $this->tupleType) {
            $res['TupleType'] = $this->tupleType;
        }
        if (null !== $this->useMultiAccount) {
            $res['UseMultiAccount'] = $this->useMultiAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInternetTupleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }
        if (isset($map['CloudIsp'])) {
            $model->cloudIsp = $map['CloudIsp'];
        }
        if (isset($map['CloudPort'])) {
            $model->cloudPort = $map['CloudPort'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OtherCity'])) {
            $model->otherCity = $map['OtherCity'];
        }
        if (isset($map['OtherCountry'])) {
            $model->otherCountry = $map['OtherCountry'];
        }
        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }
        if (isset($map['OtherIsp'])) {
            $model->otherIsp = $map['OtherIsp'];
        }
        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }
        if (isset($map['TupleType'])) {
            $model->tupleType = $map['TupleType'];
        }
        if (isset($map['UseMultiAccount'])) {
            $model->useMultiAccount = $map['UseMultiAccount'];
        }

        return $model;
    }
}
