<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest\defaultActions\forwardGroupConfig;
use AlibabaCloud\Tea\Model;

class defaultActions extends Model
{
    /**
     * @description The configuration of the action. This parameter is required and takes effect when the **Type** parameter is set to **FowardGroup**. You can specify configurations for up to 20 forwarding actions.
     *
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The type of the action. You can specify only one action type.
     *
     * Set the value to **ForwardGroup** to forward requests to multiple vServer groups.
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
