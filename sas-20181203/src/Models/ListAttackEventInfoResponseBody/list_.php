<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackEventInfoResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $attackTypeName;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var string
     */
    public $firstTimeStr;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $latestTime;

    /**
     * @var string
     */
    public $latestTimeStr;

    /**
     * @var string
     */
    public $payloadMd5;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'attackType' => 'AttackType',
        'attackTypeName' => 'AttackTypeName',
        'count' => 'Count',
        'dstPort' => 'DstPort',
        'firstTime' => 'FirstTime',
        'firstTimeStr' => 'FirstTimeStr',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'latestTime' => 'LatestTime',
        'latestTimeStr' => 'LatestTimeStr',
        'payloadMd5' => 'PayloadMd5',
        'srcIp' => 'SrcIp',
        'status' => 'Status',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->attackTypeName) {
            $res['AttackTypeName'] = $this->attackTypeName;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->firstTimeStr) {
            $res['FirstTimeStr'] = $this->firstTimeStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->latestTime) {
            $res['LatestTime'] = $this->latestTime;
        }

        if (null !== $this->latestTimeStr) {
            $res['LatestTimeStr'] = $this->latestTimeStr;
        }

        if (null !== $this->payloadMd5) {
            $res['PayloadMd5'] = $this->payloadMd5;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['AttackTypeName'])) {
            $model->attackTypeName = $map['AttackTypeName'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['FirstTimeStr'])) {
            $model->firstTimeStr = $map['FirstTimeStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['LatestTime'])) {
            $model->latestTime = $map['LatestTime'];
        }

        if (isset($map['LatestTimeStr'])) {
            $model->latestTimeStr = $map['LatestTimeStr'];
        }

        if (isset($map['PayloadMd5'])) {
            $model->payloadMd5 = $map['PayloadMd5'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
