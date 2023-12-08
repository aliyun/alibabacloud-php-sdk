<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotNodeMetricListResponseBody extends Model
{
    /**
     * @description The monitoring data.
     *
     * @example {
     * "code": "200",
     * "datapoints": "[{\"timestamp\":1698375060000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":67084.0,\"Maximum\":67084.0,\"Average\":67084.0},{\"timestamp\":1698375120000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":63704.0,\"Maximum\":63704.0,\"Average\":63704.0},{\"timestamp\":1698375180000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":67624.0,\"Maximum\":67624.0,\"Average\":67624.0},{\"timestamp\":1698375240000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":68432.0,\"Maximum\":68432.0,\"Average\":68432.0},{\"timestamp\":1698375300000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":70148.0,\"Maximum\":70148.0,\"Average\":70148.0},{\"timestamp\":1698375360000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":63612.0,\"Maximum\":63612.0,\"Average\":63612.0},{\"timestamp\":1698375420000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":68032.0,\"Maximum\":68032.0,\"Average\":68032.0},{\"timestamp\":1698375480000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":67400.0,\"Maximum\":67400.0,\"Average\":67400.0},{\"timestamp\":1698375540000,\"instanceId\":\"i-bp18jn50nid83nsu****\",\"ip\":\"1.1.1.1\",\"userId\":\"132776878515****\",\"Minimum\":65352.0,\"Maximum\":65352.0,\"Average\":65352.0}]",
     * }
     * @var string
     */
    public $data;

    /**
     * @description The request ID, which is used to locate and troubleshoot issues.
     *
     * @example 48F523DA-4C7E-5417-B872-E313E5A4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHoneypotNodeMetricListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
