<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\defaultActions\forwardGroupConfig;
use AlibabaCloud\Tea\Model;

class defaultActions extends Model
{
    /**
     * @description The configuration of the forwarding action. You can specify at most 20 actions.
     *
     * This parameter is required.
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The action. You can specify only one type. Valid value example:
     *
     **ForwardGroup**: forwards requests to multiple server groups.
     *
     * This parameter is required.
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
