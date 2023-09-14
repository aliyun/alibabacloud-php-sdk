<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\defaultActions\forwardGroupConfig;
use AlibabaCloud\Tea\Model;

class defaultActions extends Model
{
    /**
     * @description The configuration of the forwarding rule action. This parameter is required and takes effect only when the type of the action is **FowardGroup**.
     *
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The type of the task. If **ForwardGroup** is returned, requests are forwarded to multiple vServer groups.
     *
     * @example ForwardGroup
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'forwardGroupConfig' => 'ForwardGroupConfig',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardGroupConfig) {
            $res['ForwardGroupConfig'] = null !== $this->forwardGroupConfig ? $this->forwardGroupConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardGroupConfig'])) {
            $model->forwardGroupConfig = forwardGroupConfig::fromMap($map['ForwardGroupConfig']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
