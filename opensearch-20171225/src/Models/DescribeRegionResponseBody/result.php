<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The configurations.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $config;

    /**
     * @description The ID of the region. Valid values:
     *
     * pre-hangzhou: China (Hangzhou)-Staging
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'config'   => 'config',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
