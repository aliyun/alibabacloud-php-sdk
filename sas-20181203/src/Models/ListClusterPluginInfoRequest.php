<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListClusterPluginInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example alihips
     *
     * @var string
     */
    public $pluginName;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'lang'       => 'Lang',
        'pluginName' => 'PluginName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterPluginInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }

        return $model;
    }
}
