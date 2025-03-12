<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponseBody;

use AlibabaCloud\Tea\Model;

class entityList extends Model
{
    /**
     * @description The ID of the asset group.
     *
     * @example 281801
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the server.
     *
     * @example abc
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 172.19.XX.XX
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
     * @description The IP address of the server.
     *
     * @example 101.132.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The operating system of the server. Valid values:
     *
     *   **linux**
     *   **windows**
     *
     * @example windows
     *
     * @var string
     */
    public $os;

    /**
     * @description The UUID of the server.
     *
     * @example 4fe8e1cd-3c37-4851-b9de-124da32c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'groupId'      => 'GroupId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'ip'           => 'Ip',
        'os'           => 'Os',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
