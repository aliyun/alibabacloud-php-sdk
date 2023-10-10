<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListConvertableEcuRequest extends Model
{
    /**
     * @description The ID of the cluster. You can call the ListCluster operation to query the cluster ID. For more information, see [ListCluster](~~154995~~).
     *
     * @example b3e3f77b-462e-****-****-bec8727a****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'clusterId' => 'clusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConvertableEcuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        return $model;
    }
}
