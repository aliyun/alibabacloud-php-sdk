<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20181111\Models\QueryPlanStatusResponseBody;

use AlibabaCloud\Tea\Model;

class agentLocations extends Model
{
    /**
     * @var mixed[][]
     */
    public $agentLocation;
    protected $_name = [
        'agentLocation' => 'AgentLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentLocation) {
            $res['AgentLocation'] = $this->agentLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentLocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentLocation'])) {
            if (!empty($map['AgentLocation'])) {
                $model->agentLocation = $map['AgentLocation'];
            }
        }

        return $model;
    }
}
