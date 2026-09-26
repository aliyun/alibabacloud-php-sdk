<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products;

use AlibabaCloud\Dara\Model;

class sellerAgent extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var int
     */
    public $agentType;
    protected $_name = [
        'agentName' => 'AgentName',
        'agentType' => 'AgentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        return $model;
    }
}
