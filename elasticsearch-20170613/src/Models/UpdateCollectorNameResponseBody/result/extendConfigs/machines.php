<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody\result\extendConfigs;

use AlibabaCloud\Tea\Model;

class machines extends Model
{
    /**
     * @example heartOk
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @example c1b9fde5172b84f82b9928e825a7b8988
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentStatus' => 'agentStatus',
        'instanceId'  => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['agentStatus'] = $this->agentStatus;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentStatus'])) {
            $model->agentStatus = $map['agentStatus'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
