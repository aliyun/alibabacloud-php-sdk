<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\CheckInstanceSupportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example i-wz9d00ut2ska3mlyhn6j
     *
     * @var string
     */
    public $instance;

    /**
     * @example instance not found in ecs
     *
     * @var string
     */
    public $reason;

    /**
     * @example true
     *
     * @var bool
     */
    public $support;
    protected $_name = [
        'instance' => 'instance',
        'reason' => 'reason',
        'support' => 'support',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->support) {
            $res['support'] = $this->support;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['support'])) {
            $model->support = $map['support'];
        }

        return $model;
    }
}
