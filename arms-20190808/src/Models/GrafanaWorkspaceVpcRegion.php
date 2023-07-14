<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceVpcRegion extends Model
{
    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 华北2（北京）
     *
     * @var string
     */
    public $regionName;
    protected $_name = [
        'regionId'   => 'regionId',
        'regionName' => 'regionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['regionName'] = $this->regionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceVpcRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['regionName'])) {
            $model->regionName = $map['regionName'];
        }

        return $model;
    }
}
