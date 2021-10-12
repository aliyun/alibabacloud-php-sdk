<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarxCommodityResponseBody\DBInstance;

use AlibabaCloud\Tea\Model;

class connAddrs extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $connectionString;
    protected $_name = [
        'type'             => 'Type',
        'vSwitchId'        => 'VSwitchId',
        'port'             => 'Port',
        'VPCId'            => 'VPCId',
        'connectionString' => 'ConnectionString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connAddrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        return $model;
    }
}
