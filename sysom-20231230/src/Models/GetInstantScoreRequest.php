<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetInstantScoreRequest extends Model
{
    /**
     * @example 1808078950770264
     *
     * @var string
     */
    public $cluster;

    /**
     * @example i-wz9d00ut2ska3mlyhn6j
     *
     * @var string
     */
    public $instance;
    protected $_name = [
        'cluster' => 'cluster',
        'instance' => 'instance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstantScoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        return $model;
    }
}
