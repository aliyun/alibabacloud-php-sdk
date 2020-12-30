<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $create;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $cmd;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'create'          => 'Create',
        'internetIp'      => 'InternetIp',
        'user'            => 'User',
        'ip'              => 'Ip',
        'instanceId'      => 'InstanceId',
        'source'          => 'Source',
        'cmd'             => 'Cmd',
        'intranetIp'      => 'IntranetIp',
        'period'          => 'Period',
        'uuid'            => 'Uuid',
        'instanceName'    => 'InstanceName',
        'md5'             => 'Md5',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
