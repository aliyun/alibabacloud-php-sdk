<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSlowQueryStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 100298370
     *
     * @var string
     */
    public $appGroupId;

    /**
     * @description The network type of the slow query optimization service. Valid values:
     *
     *   outer: the Internet
     *   internal: the internal network
     *
     * @example internal
     *
     * @var string
     */
    public $region;

    /**
     * @description The status of the slow query optimization service. Valid values:
     *
     *   enabled
     *   disabled
     *   n/a
     *
     * @example disabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appGroupId' => 'appGroupId',
        'region'     => 'region',
        'status'     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['appGroupId'] = $this->appGroupId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appGroupId'])) {
            $model->appGroupId = $map['appGroupId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
