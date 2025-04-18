<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class GetInternetTupleRequest extends Model
{
    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $cloudIp;

    /**
     * @var string[]
     */
    public $cloudIpList;

    /**
     * @var string
     */
    public $cloudIsp;

    /**
     * @var string
     */
    public $cloudPort;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $instanceList;

    /**
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
     * @var string
     */
    public $otherIp;

    /**
     * @var string
     */
    public $otherIsp;

    /**
     * @var string
     */
    public $otherPort;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var int
     */
    public $topN;

    /**
     * @var int
     */
    public $tupleType;

    /**
     * @var bool
     */
    public $useMultiAccount;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'beginTime' => 'BeginTime',
        'cloudIp' => 'CloudIp',
        'cloudIpList' => 'CloudIpList',
        'cloudIsp' => 'CloudIsp',
        'cloudPort' => 'CloudPort',
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'instanceList' => 'InstanceList',
        'orderBy' => 'OrderBy',
        'otherCity' => 'OtherCity',
        'otherCountry' => 'OtherCountry',
        'otherIp' => 'OtherIp',
        'otherIsp' => 'OtherIsp',
        'otherPort' => 'OtherPort',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'topN' => 'TopN',
        'tupleType' => 'TupleType',
        'useMultiAccount' => 'UseMultiAccount',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->cloudIpList)) {
            Model::validateArray($this->cloudIpList);
        }
        if (\is_array($this->instanceList)) {
            Model::validateArray($this->instanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }

        if (null !== $this->cloudIpList) {
            if (\is_array($this->cloudIpList)) {
                $res['CloudIpList'] = [];
                $n1 = 0;
                foreach ($this->cloudIpList as $item1) {
                    $res['CloudIpList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->instanceList)) {
                $res['InstanceList'] = [];
                $n1 = 0;
                foreach ($this->instanceList as $item1) {
                    $res['InstanceList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }

        if (isset($map['CloudIpList'])) {
            if (!empty($map['CloudIpList'])) {
                $model->cloudIpList = [];
                $n1 = 0;
                foreach ($map['CloudIpList'] as $item1) {
                    $model->cloudIpList[$n1++] = $item1;
                }
            }
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
                $model->instanceList = [];
                $n1 = 0;
                foreach ($map['InstanceList'] as $item1) {
                    $model->instanceList[$n1++] = $item1;
                }
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
