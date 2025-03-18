<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The endpoint of the region.
     *
     * @example endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The name of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the region. Valid values:
     *
     * cn-hangzhou: China (Hangzhou)
     *
     * cn-shanghai: China (Shanghai)
     *
     * cn-qingdao: China (Qingdao)
     *
     * cn-beijing: China (Beijing)
     *
     * cn-zhangjiakou: China (Zhangjiakou)
     *
     * cn-shenzhen: China (Shenzhen)
     *
     * ap-southeast-1: Singapore (Singapore)
     *
     * cn-internal: Internal Center
     *
     * cn-zhangbei-in: Internal Center (Zhangjiakou)
     *
     * us-west-1-in: Internal Center (US)
     *
     * rus-west-1-in: Internal Center (Russia)
     *
     * cn-daily: Daily Environment
     *
     * cn-test: Joint Debugging
     *
     * pre-hangzhou: China (Hangzhou)-Staging
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'endpoint' => 'endpoint',
        'localName' => 'localName',
        'regionId' => 'regionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
