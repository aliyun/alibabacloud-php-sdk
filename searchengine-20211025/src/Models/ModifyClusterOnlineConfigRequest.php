<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterOnlineConfigRequest extends Model
{
    /**
     * @description The information about the cluster
     *
     * @var string[]
     */
    public $clusters;

    /**
     * @description 配置信息
     *
     * @var int[]
     */
    public $config;
    protected $_name = [
        'clusters' => 'clusters',
        'config'   => 'config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['clusters'] = $this->clusters;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterOnlineConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusters'])) {
            if (!empty($map['clusters'])) {
                $model->clusters = $map['clusters'];
            }
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        return $model;
    }
}
