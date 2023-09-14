<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupTuples extends Model
{
    /**
     * @description The server group to which requests are distributed.
     *
     * @example sgp-k86c1ov501id6p****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The weight of the server group. A larger value specifies a higher weight. A server group with a higher weight receives more requests. Valid values: **0** to **100**.
     *
     *   If only one destination server group exists and you do not specify a weight, the default value **100** is used.
     *   If more than one destination server group exists, you must specify weights.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'serverGroupId' => 'ServerGroupId',
        'weight'        => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupTuples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
