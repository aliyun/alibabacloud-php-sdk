<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class QueryAskLumaLogRequest extends Model
{
    /**
     * @var string
     */
    public $after;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'after' => 'After',
        'agentName' => 'AgentName',
        'limit' => 'Limit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->after) {
            $res['After'] = $this->after;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
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
        if (isset($map['After'])) {
            $model->after = $map['After'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
