<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListResponseBody;

use AlibabaCloud\Tea\Model;

class bindList extends Model
{
    /**
     * @description The number of alerts.
     *
     * @example 2
     *
     * @var string
     */
    public $auditCount;

    /**
     * @description The number of blocked tampering events.
     *
     * @example 10
     *
     * @var string
     */
    public $blockCount;

    /**
     * @description The number of protected directories.
     *
     * @example 5
     *
     * @var string
     */
    public $dirCount;

    /**
     * @description The name of the server.
     *
     * @example testName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 54.169.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The operating system that the server runs.
     *
     * @example Linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The percentage of the starting progress of web tamper proofing. Valid values: 0 to 100.
     *
     * @example 99
     *
     * @var int
     */
    public $percent;

    /**
     * @description The error code for web tamper proofing. Valid values:
     *
     *   **2001**: The Security Center agent is offline.
     *   **9999**: The connection timed out.
     *
     * @example 2001
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description The exception details of web tamper proofing. Valid values:
     *
     *   **client offline**: The Security Center agent is offline.
     *   **timeout**: The connection timed out.
     *
     * @example client offline
     *
     * @var string
     */
    public $serviceDetail;

    /**
     * @description The status of web tamper proofing on the server. Valid values:
     *
     *   **stop**: Web tamper proofing is disabled.
     *   **initializing**: Web tamper proofing is being enabled.
     *   **exception**: Web tamper proofing is not running as expected.
     *   **running**: Web tamper proofing is running.
     *   **closing**: Web tamper proofing is being disabled.
     *
     * @example stop
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description The protection status of the server. Valid values:
     *
     *   **on**: The server is protected.
     *   **off**: The server is not protected.
     *
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the server.
     *
     * @example inet-12345****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'auditCount'    => 'AuditCount',
        'blockCount'    => 'BlockCount',
        'dirCount'      => 'DirCount',
        'instanceName'  => 'InstanceName',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'os'            => 'Os',
        'percent'       => 'Percent',
        'serviceCode'   => 'ServiceCode',
        'serviceDetail' => 'ServiceDetail',
        'serviceStatus' => 'ServiceStatus',
        'status'        => 'Status',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditCount) {
            $res['AuditCount'] = $this->auditCount;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }
        if (null !== $this->dirCount) {
            $res['DirCount'] = $this->dirCount;
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
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->serviceDetail) {
            $res['ServiceDetail'] = $this->serviceDetail;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditCount'])) {
            $model->auditCount = $map['AuditCount'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }
        if (isset($map['DirCount'])) {
            $model->dirCount = $map['DirCount'];
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
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['ServiceDetail'])) {
            $model->serviceDetail = $map['ServiceDetail'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
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
