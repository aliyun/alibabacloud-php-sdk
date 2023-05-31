<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponseBody\targetStats;

use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description Indicates whether the configurations are applied to the server. Valid values:
     *
     *   **add**: yes
     *   **del**: no
     *
     * @example add
     *
     * @var string
     */
    public $flag;

    /**
     * @description The group ID or UUID of the server to which the configurations are applied.
     *
     * @example 0011ea53-738c-4bff-93be-ce6a1cc9****
     *
     * @var string
     */
    public $target;

    /**
     * @description The condition by which the configurations are applied to the server. Valid values:
     *
     *   **uuid**: the UUID of the server
     *   **groupId**: the ID of the server group
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'flag'       => 'Flag',
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
