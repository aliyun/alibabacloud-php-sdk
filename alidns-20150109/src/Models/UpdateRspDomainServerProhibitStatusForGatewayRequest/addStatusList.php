<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainServerProhibitStatusForGatewayRequest;

use AlibabaCloud\Dara\Model;

class addStatusList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMsg;
    protected $_name = [
        'status' => 'Status',
        'statusMsg' => 'StatusMsg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMsg) {
            $res['StatusMsg'] = $this->statusMsg;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMsg'])) {
            $model->statusMsg = $map['StatusMsg'];
        }

        return $model;
    }
}
