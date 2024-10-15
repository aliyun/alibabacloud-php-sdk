<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\operationPolicy;

use AlibabaCloud\Tea\Model;

class clusterAutoUpgrade extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'channel' => 'channel',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterAutoUpgrade
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
