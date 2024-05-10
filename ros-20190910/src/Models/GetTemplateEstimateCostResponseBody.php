<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateEstimateCostResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 6DEA36EF-C97D-5658-A4AC-4F5DB08D1A89
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource details.
     *
     * @example [{\\"LogicalResourceIdPattern\\": \\"wait1\\", \\"ResourceType\\": \\"time_sleep\\", \\"ResourcePath\\": \\"wait1\\"}, {\\"LogicalResourceIdPattern\\": \\"wait2\\", \\"ResourceType\\": \\"time_sleep\\", \\"ResourcePath\\": \\"wait2\\"}]
     *
     * @var mixed[]
     */
    public $resources;
    protected $_name = [
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateEstimateCostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
