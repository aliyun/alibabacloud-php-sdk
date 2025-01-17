<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcProbeScanResultListResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $clientStatus;
    /**
     * @var string
     */
    public $idcName;
    /**
     * @var string
     */
    public $ipSegment;
    /**
     * @var int
     */
    public $lastScanTime;
    /**
     * @var string
     */
    public $os;
    /**
     * @var string
     */
    public $probeInternetIp;
    /**
     * @var string
     */
    public $probeIntranetIp;
    /**
     * @var string
     */
    public $probeMachineName;
    /**
     * @var string
     */
    public $probeUuid;
    /**
     * @var int
     */
    public $scanResultId;
    /**
     * @var string
     */
    public $scannedIp;
    /**
     * @var string
     */
    public $validPort;
    protected $_name = [
        'clientStatus'     => 'ClientStatus',
        'idcName'          => 'IdcName',
        'ipSegment'        => 'IpSegment',
        'lastScanTime'     => 'LastScanTime',
        'os'               => 'Os',
        'probeInternetIp'  => 'ProbeInternetIp',
        'probeIntranetIp'  => 'ProbeIntranetIp',
        'probeMachineName' => 'ProbeMachineName',
        'probeUuid'        => 'ProbeUuid',
        'scanResultId'     => 'ScanResultId',
        'scannedIp'        => 'ScannedIp',
        'validPort'        => 'ValidPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }

        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
        }

        if (null !== $this->ipSegment) {
            $res['IpSegment'] = $this->ipSegment;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->probeInternetIp) {
            $res['ProbeInternetIp'] = $this->probeInternetIp;
        }

        if (null !== $this->probeIntranetIp) {
            $res['ProbeIntranetIp'] = $this->probeIntranetIp;
        }

        if (null !== $this->probeMachineName) {
            $res['ProbeMachineName'] = $this->probeMachineName;
        }

        if (null !== $this->probeUuid) {
            $res['ProbeUuid'] = $this->probeUuid;
        }

        if (null !== $this->scanResultId) {
            $res['ScanResultId'] = $this->scanResultId;
        }

        if (null !== $this->scannedIp) {
            $res['ScannedIp'] = $this->scannedIp;
        }

        if (null !== $this->validPort) {
            $res['ValidPort'] = $this->validPort;
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
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }

        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
        }

        if (isset($map['IpSegment'])) {
            $model->ipSegment = $map['IpSegment'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['ProbeInternetIp'])) {
            $model->probeInternetIp = $map['ProbeInternetIp'];
        }

        if (isset($map['ProbeIntranetIp'])) {
            $model->probeIntranetIp = $map['ProbeIntranetIp'];
        }

        if (isset($map['ProbeMachineName'])) {
            $model->probeMachineName = $map['ProbeMachineName'];
        }

        if (isset($map['ProbeUuid'])) {
            $model->probeUuid = $map['ProbeUuid'];
        }

        if (isset($map['ScanResultId'])) {
            $model->scanResultId = $map['ScanResultId'];
        }

        if (isset($map['ScannedIp'])) {
            $model->scannedIp = $map['ScannedIp'];
        }

        if (isset($map['ValidPort'])) {
            $model->validPort = $map['ValidPort'];
        }

        return $model;
    }
}
