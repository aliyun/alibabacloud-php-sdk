<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNamingTrackResponseBody;

use AlibabaCloud\Dara\Model;

class traces extends Model
{
    /**
     * @var string
     */
    public $clientIp;
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $instanceSize;
    /**
     * @var string
     */
    public $nodeName;
    /**
     * @var string
     */
    public $pushTime;
    /**
     * @var string
     */
    public $pushTimeAll;
    /**
     * @var string
     */
    public $pushTimeNetwork;
    /**
     * @var string
     */
    public $serverName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
