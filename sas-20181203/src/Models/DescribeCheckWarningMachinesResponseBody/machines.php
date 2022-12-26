<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class machines extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @example i-bp1dp42hgn1xcq8l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example win-oracl****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example D0D6E6E4-CB8C-4897-B852-46AEFDA0****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'bind'         => 'Bind',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'regionId'     => 'RegionId',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
