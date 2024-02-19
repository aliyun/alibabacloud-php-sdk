<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDisksResponseBody\data\accessAuthorization;

use AlibabaCloud\Tea\Model;

class pod extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cid*******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The pod ID.
     *
     * @example pid******
     *
     * @var string
     */
    public $podId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'podId'     => 'PodId',
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
        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        return $model;
    }
}
