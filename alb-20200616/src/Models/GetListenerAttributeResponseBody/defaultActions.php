<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\defaultActions\forwardGroupConfig;
use AlibabaCloud\Tea\Model;

class defaultActions extends Model
{
    /**
     * @description The configuration of the ForwardGroup action. This parameter is returned and takes effect when Type is set to **ForwardGroup**.
     *
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The type of the action.
     *
     * If **ForwardGroup** is returned, requests are forwarded to multiple vServer groups.
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
