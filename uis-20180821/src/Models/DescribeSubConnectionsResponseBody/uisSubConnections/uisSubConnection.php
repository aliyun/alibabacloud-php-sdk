<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionsResponseBody\uisSubConnections;

use AlibabaCloud\Tea\Model;

class uisSubConnection extends Model
{
    /**
     * @var string
     */
    public $uisSubConnectionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'uisSubConnectionId' => 'UisSubConnectionId',
        'description'        => 'Description',
        'createTime'         => 'CreateTime',
        'ip'                 => 'Ip',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisSubConnectionId) {
            $res['UisSubConnectionId'] = $this->uisSubConnectionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisSubConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisSubConnectionId'])) {
            $model->uisSubConnectionId = $map['UisSubConnectionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
