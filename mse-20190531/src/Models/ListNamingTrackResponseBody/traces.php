<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNamingTrackResponseBody;

use AlibabaCloud\Tea\Model;

class traces extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 120.40.32.235
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The group.
     *
     * @example prod
     *
     * @var string
     */
    public $group;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var string
     */
    public $instanceSize;

    /**
     * @description The name of the node.
     *
     * @example mse-197*****-167083******-reg-center-0-0
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The push time.
     *
     * @example 2022-12-16 11:48:07
     *
     * @var string
     */
    public $pushTime;

    /**
     * @description The total push time.
     *
     * @example 628ms
     *
     * @var string
     */
    public $pushTimeAll;

    /**
     * @description The push time for the network.
     *
     * @example 37ms
     *
     * @var string
     */
    public $pushTimeNetwork;

    /**
     * @description The name of the service.
     *
     * @example fpx-xms-baseinfo
     *
     * @var string
     */
    public $serverName;

    /**
     * @description The duration that is specified in the service-level agreement (SLA).
     *
     * @example 628ms
     *
     * @var string
     */
    public $slaTime;
    protected $_name = [
        'clientIp'        => 'ClientIp',
        'group'           => 'Group',
        'instanceSize'    => 'InstanceSize',
        'nodeName'        => 'NodeName',
        'pushTime'        => 'PushTime',
        'pushTimeAll'     => 'PushTimeAll',
        'pushTimeNetwork' => 'PushTimeNetwork',
        'serverName'      => 'ServerName',
        'slaTime'         => 'SlaTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceSize) {
            $res['InstanceSize'] = $this->instanceSize;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->pushTimeAll) {
            $res['PushTimeAll'] = $this->pushTimeAll;
        }
        if (null !== $this->pushTimeNetwork) {
            $res['PushTimeNetwork'] = $this->pushTimeNetwork;
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }
        if (null !== $this->slaTime) {
            $res['SlaTime'] = $this->slaTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceSize'])) {
            $model->instanceSize = $map['InstanceSize'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['PushTimeAll'])) {
            $model->pushTimeAll = $map['PushTimeAll'];
        }
        if (isset($map['PushTimeNetwork'])) {
            $model->pushTimeNetwork = $map['PushTimeNetwork'];
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }
        if (isset($map['SlaTime'])) {
            $model->slaTime = $map['SlaTime'];
        }

        return $model;
    }
}
