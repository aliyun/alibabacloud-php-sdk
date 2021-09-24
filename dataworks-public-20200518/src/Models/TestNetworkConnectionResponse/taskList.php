<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponse;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var bool
     */
    public $connectStatus;

    /**
     * @var string
     */
    public $connectMessage;
    protected $_name = [
        'connectStatus'  => 'ConnectStatus',
        'connectMessage' => 'ConnectMessage',
    ];

    public function validate()
    {
        Model::validateRequired('connectStatus', $this->connectStatus, true);
        Model::validateRequired('connectMessage', $this->connectMessage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }
        if (null !== $this->connectMessage) {
            $res['ConnectMessage'] = $this->connectMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }
        if (isset($map['ConnectMessage'])) {
            $model->connectMessage = $map['ConnectMessage'];
        }

        return $model;
    }
}
