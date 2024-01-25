<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models;

use AlibabaCloud\Tea\Model;

class ListDefaultComponentsRequest extends Model
{
    /**
     * @example CDP-base
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $securityMode;
    protected $_name = [
        'clusterType'  => 'ClusterType',
        'securityMode' => 'SecurityMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->securityMode) {
            $res['SecurityMode'] = $this->securityMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDefaultComponentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['SecurityMode'])) {
            $model->securityMode = $map['SecurityMode'];
        }

        return $model;
    }
}
