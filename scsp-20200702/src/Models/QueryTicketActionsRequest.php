<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class QueryTicketActionsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var int[]
     */
    public $actionCodeList;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'ticketId'       => 'TicketId',
        'actionCodeList' => 'ActionCodeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->actionCodeList) {
            $res['ActionCodeList'] = $this->actionCodeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTicketActionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['ActionCodeList'])) {
            if (!empty($map['ActionCodeList'])) {
                $model->actionCodeList = $map['ActionCodeList'];
            }
        }

        return $model;
    }
}
