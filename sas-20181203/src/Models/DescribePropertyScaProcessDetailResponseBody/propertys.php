<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaProcessDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description The command line of the process.
     *
     * @example java -Xms128m -Xmx512m -DNACOS_URL=http://10.184.XX.XX:8848 -DNACOS_NAMESPACE=iam-sit -jar /opt/service/xxl-job/xxl-job-admin-2.3.0.jar
     *
     * @var string
     */
    public $cmdline;

    /**
     * @description The timestamp at which the last asset fingerprint collection is performed. Unit: milliseconds.
     *
     * @example 1597987834000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The instance ID of the server.
     *
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the server.
     *
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 120.26.XX.XX
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
     * @description The name of the process.
     *
     * @example java
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the process.
     *
     * @example 522
     *
     * @var string
     */
    public $pid;

    /**
     * @description The UUID of the server.
     *
     * @example 162eb349-c2d9-4f8b-805c-75b43d4c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'cmdline'         => 'Cmdline',
        'createTimestamp' => 'CreateTimestamp',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'name'            => 'Name',
        'pid'             => 'Pid',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
