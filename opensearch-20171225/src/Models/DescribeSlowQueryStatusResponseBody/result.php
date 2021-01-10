<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSlowQueryStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $appGroupId;
    protected $_name = [
        'region'     => 'region',
        'status'     => 'status',
        'appGroupId' => 'appGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->appGroupId) {
            $res['appGroupId'] = $this->appGroupId;
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
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['appGroupId'])) {
            $model->appGroupId = $map['appGroupId'];
        }

        return $model;
    }
}
