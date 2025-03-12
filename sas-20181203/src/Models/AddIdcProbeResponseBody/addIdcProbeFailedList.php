<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddIdcProbeResponseBody;

use AlibabaCloud\Tea\Model;

class addIdcProbeFailedList extends Model
{
    /**
     * @description The error message that is returned.
     *
     * @example The ResourceDirectoryId is invalid.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The name of the data center.
     *
     * @example test
     *
     * @var string
     */
    public $idcName;

    /**
     * @description The region ID.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $idcRegion;

    /**
     * @description The ID of the server.
     *
     * @example sas-yqcl2ck3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example gl-sms-01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 95.214.XXX.XXX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address.
     *
     * @example 172.29.XXX.XXX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The settings of the CIDR block.
     *
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $ipSegments;

    /**
     * @description The UUID of the server. Multiple UUIDs are separated by commas (,).
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUID.
     * @example 076a446d-df7d-424c-bdc5-bb5dc7f1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'errorMsg'     => 'ErrorMsg',
        'idcName'      => 'IdcName',
        'idcRegion'    => 'IdcRegion',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'ipSegments'   => 'IpSegments',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
        }
        if (null !== $this->idcRegion) {
            $res['IdcRegion'] = $this->idcRegion;
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
        if (null !== $this->ipSegments) {
            $res['IpSegments'] = $this->ipSegments;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addIdcProbeFailedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
        }
        if (isset($map['IdcRegion'])) {
            $model->idcRegion = $map['IdcRegion'];
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
        if (isset($map['IpSegments'])) {
            $model->ipSegments = $map['IpSegments'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
