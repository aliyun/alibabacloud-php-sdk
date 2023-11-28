<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class zoneInfos extends Model
{
    /**
     * @description The zone ID of the new instance.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The configuration of cluster extension parameters.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'status' => 'status',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
