<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\operationPolicy;

use AlibabaCloud\Tea\Model;

class clusterAutoUpgrade extends Model
{
    /**
     * @description The frequency of automatic cluster updates. For more information, see [Update frequency](https://help.aliyun.com/document_detail/2712866.html).
     *
     * Valid values:
     *
     *   patch: the latest patch version.
     *   stables: the second-latest minor version.
     *   rapid: the latest minor version.
     *
     * @example patch
     *
     * @var string
     */
    public $channel;

    /**
     * @description Specifies whether to enable automatic update.
     *
     * @example true
     *
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
