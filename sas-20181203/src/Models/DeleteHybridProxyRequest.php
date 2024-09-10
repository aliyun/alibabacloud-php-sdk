<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteHybridProxyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description This parameter is required.
     *
     * @example inet-proxy-d2d94e8b-bb25-4744-8004-1e08a53c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHybridProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
