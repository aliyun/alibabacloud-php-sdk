<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest;

use AlibabaCloud\Tea\Model;

class mcpRouteConfig extends Model
{
    /**
     * @var string
     */
    public $exposedUriPath;

    /**
     * @var bool
     */
    public $mcpStatisticsEnable;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'exposedUriPath' => 'exposedUriPath',
        'mcpStatisticsEnable' => 'mcpStatisticsEnable',
        'protocol' => 'protocol',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposedUriPath) {
            $res['exposedUriPath'] = $this->exposedUriPath;
        }
        if (null !== $this->mcpStatisticsEnable) {
            $res['mcpStatisticsEnable'] = $this->mcpStatisticsEnable;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mcpRouteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['exposedUriPath'])) {
            $model->exposedUriPath = $map['exposedUriPath'];
        }
        if (isset($map['mcpStatisticsEnable'])) {
            $model->mcpStatisticsEnable = $map['mcpStatisticsEnable'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
