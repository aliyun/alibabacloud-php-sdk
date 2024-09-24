<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigClusterWhitelistRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example cluster-729dm40FG****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The IP address whitelist of the cluster.
     *
     * This parameter is required.
     * @example 18.68.XX.XX
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigClusterWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
