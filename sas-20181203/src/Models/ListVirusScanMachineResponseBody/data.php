<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 28
     *
     * @var int
     */
    public $eventCount;

    /**
     * @example i-bp180bogui4fc0z4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example centos****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'eventCount'   => 'EventCount',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
