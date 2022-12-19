<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileEventsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of attempts.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The timestamp at which the event on web tamper proofing was first detected.
     *
     * @example 1657178400000
     *
     * @var int
     */
    public $ds;

    /**
     * @description The name of the event on web tamper proofing.
     *
     * @example modify
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The status of the event on web tamper proofing. Valid values:
     *
     *   **1**: unhandled
     *   **2**: ignored
     *   **4**: deprecated
     *   **8**: marked as false positive
     *   **10**: added to the whitelist
     *   **16**: being handled
     *   **32**: defended
     *   **64**: invalid
     *   **128**: deleted
     *   **512**: automatically handled
     *
     * @example 1
     *
     * @var string
     */
    public $eventStatus;

    /**
     * @description The prevention mode. Valid values:
     *
     *   **audit**: Interception Mode
     *   **web_lock**: Alert Mode
     *
     * @example audit
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The timestamp at which the event on web tamper proofing was last detected.
     *
     * @example 1657178400000
     *
     * @var int
     */
    public $gmtEvent;

    /**
     * @description The ID of the event on web tamper proofing.
     *
     * @example 3555953980
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the asset.
     *
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the affected asset.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset.
     *
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP address of the asset.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The severity of the event on web tamper proofing. Valid values: **medium**.
     *
     * @example medium
     *
     * @var string
     */
    public $level;

    /**
     * @description The file path.
     *
     * @example D:\test-tamper-proofing\123.html
     *
     * @var string
     */
    public $path;

    /**
     * @description The name of the process.
     *
     * @example python3.7
     *
     * @var string
     */
    public $processName;

    /**
     * @description The path of the process.
     *
     * @example C:\Windows\explorer.exe
     *
     * @var string
     */
    public $processPath;

    /**
     * @description The status of the event on web tamper proofing. Valid values:
     *
     *   **1**: unhandled
     *   **2**: ignored
     *   **4**: deprecated
     *   **8**: marked as false positive
     *   **10**: added to the whitelist
     *   **16**: being handled
     *   **32**: defended
     *   **64**: invalid
     *   **128**: deleted
     *   **512**: automatically handled
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the asset.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'count'        => 'Count',
        'ds'           => 'Ds',
        'eventName'    => 'EventName',
        'eventStatus'  => 'EventStatus',
        'eventType'    => 'EventType',
        'gmtEvent'     => 'GmtEvent',
        'id'           => 'Id',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'ip'           => 'Ip',
        'level'        => 'Level',
        'path'         => 'Path',
        'processName'  => 'ProcessName',
        'processPath'  => 'ProcessPath',
        'status'       => 'Status',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ds) {
            $res['Ds'] = $this->ds;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->gmtEvent) {
            $res['GmtEvent'] = $this->gmtEvent;
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Ds'])) {
            $model->ds = $map['Ds'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GmtEvent'])) {
            $model->gmtEvent = $map['GmtEvent'];
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessPath'])) {
            $model->processPath = $map['ProcessPath'];
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
