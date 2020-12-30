<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponseBody;

use AlibabaCloud\Tea\Model;

class entityList extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $intranetIp;
    protected $_name = [
        'uuid'         => 'Uuid',
        'groupId'      => 'GroupId',
        'internetIp'   => 'InternetIp',
        'instanceName' => 'InstanceName',
        'ip'           => 'Ip',
        'os'           => 'Os',
        'intranetIp'   => 'IntranetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        return $model;
    }
}
