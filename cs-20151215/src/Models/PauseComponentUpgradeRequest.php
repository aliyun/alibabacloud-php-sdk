<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class PauseComponentUpgradeRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterid;

    /**
     * @description 组件ID。
     *
     * @var string
     */
    public $componentid;
    protected $_name = [
        'clusterid'   => 'clusterid',
        'componentid' => 'componentid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterid) {
            $res['clusterid'] = $this->clusterid;
        }
        if (null !== $this->componentid) {
            $res['componentid'] = $this->componentid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PauseComponentUpgradeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterid'])) {
            $model->clusterid = $map['clusterid'];
        }
        if (isset($map['componentid'])) {
            $model->componentid = $map['componentid'];
        }

        return $model;
    }
}
