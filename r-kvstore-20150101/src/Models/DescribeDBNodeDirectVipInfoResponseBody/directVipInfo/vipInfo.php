<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody\directVipInfo;

use AlibabaCloud\Dara\Model;

class vipInfo extends Model
{
    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $vip;
    protected $_name = [
        'netType' => 'NetType',
        'nodeId' => 'NodeId',
        'port' => 'Port',
        'vip' => 'Vip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
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
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        return $model;
    }
}
