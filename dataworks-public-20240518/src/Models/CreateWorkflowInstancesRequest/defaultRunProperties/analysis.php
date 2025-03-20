<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description Whether to block the operation if the analysis fails.
     *
     * @example true
     *
     * @var bool
     */
    public $blocked;

    /**
     * @description Whether to enable analysis.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'blocked' => 'Blocked',
        'enabled' => 'Enabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->blocked) {
            $res['Blocked'] = $this->blocked;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blocked'])) {
            $model->blocked = $map['Blocked'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
