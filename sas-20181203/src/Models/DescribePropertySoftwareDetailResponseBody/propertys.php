<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description The timestamp at which the last asset fingerprint collection is performed. Unit: milliseconds.
     *
     * @example 1649149566000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The time at which the software is installed.
     *
     * @example 2022-04-07 10:54:49
     *
     * @var string
     */
    public $installTime;

    /**
     * @description The timestamp at which the software is installed. Unit: milliseconds.
     *
     * @example 1649066826000
     *
     * @var int
     */
    public $installTimeDt;

    /**
     * @description The ID of the server.
     *
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 100.104.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP addresses of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The name of the software.
     *
     * @example aaa_base
     *
     * @var string
     */
    public $name;

    /**
     * @description The installation path of the software.
     *
     * @example /etc/test
     *
     * @var string
     */
    public $path;

    /**
     * @description The UUID of the server.
     *
     * @example 162eb349-c2d9-4f8b-805c-75b43d4c****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The version of the software.
     *
     * @example 3.10.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'installTime'     => 'InstallTime',
        'installTimeDt'   => 'InstallTimeDt',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'ip'              => 'Ip',
        'name'            => 'Name',
        'path'            => 'Path',
        'uuid'            => 'Uuid',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }
        if (null !== $this->installTimeDt) {
            $res['InstallTimeDt'] = $this->installTimeDt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['InstallTimeDt'])) {
            $model->installTimeDt = $map['InstallTimeDt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
