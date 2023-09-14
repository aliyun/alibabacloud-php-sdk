<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupStickySession extends Model
{
    /**
     * @description The type of header. Valid values:
     *
     *   **UserDefined**: a custom header.
     *   **ReferenceHeader**: a header that is referenced from one of the request headers.
     *   **SystemDefined**: a header predefined by the system.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The priority of the action within the forwarding rule. Valid values: **1 to 50000**. A lower value indicates a higher priority. The actions of a forwarding rule are applied in descending order of priority. This parameter is required. The priority of each action within a forwarding rule must be unique. You can specify priorities for at most 20 actions.
     *
     * @example 2
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'enabled' => 'Enabled',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupStickySession
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
