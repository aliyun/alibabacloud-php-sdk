<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $ensInstanceIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $serverName;
    protected $_name = [
        'ensInstanceIds' => 'EnsInstanceIds',
        'ownerId'        => 'OwnerId',
        'serverName'     => 'ServerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensInstanceIds) {
            $res['EnsInstanceIds'] = $this->ensInstanceIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsInstanceIds'])) {
            $model->ensInstanceIds = $map['EnsInstanceIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        return $model;
    }
}
