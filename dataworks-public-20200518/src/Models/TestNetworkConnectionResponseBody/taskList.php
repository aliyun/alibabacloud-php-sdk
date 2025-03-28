<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponseBody;

use AlibabaCloud\Dara\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $connectMessage;

    /**
     * @var bool
     */
    public $connectStatus;
    protected $_name = [
        'connectMessage' => 'ConnectMessage',
        'connectStatus' => 'ConnectStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectMessage) {
            $res['ConnectMessage'] = $this->connectMessage;
        }

        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
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
        if (isset($map['ConnectMessage'])) {
            $model->connectMessage = $map['ConnectMessage'];
        }

        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }

        return $model;
    }
}
