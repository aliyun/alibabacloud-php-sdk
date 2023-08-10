<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The URL of the OpenSearch console.
     *
     * @example https://opensearch-cn-hangzhou.console.aliyun.com
     *
     * @var string
     */
    public $consoleUrl;

    /**
     * @description The endpoint of the region.
     *
     * @example opensearch.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The name of the region.
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'consoleUrl' => 'consoleUrl',
        'endpoint'   => 'endpoint',
        'localName'  => 'localName',
        'regionId'   => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleUrl) {
            $res['consoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
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
        if (isset($map['consoleUrl'])) {
            $model->consoleUrl = $map['consoleUrl'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
