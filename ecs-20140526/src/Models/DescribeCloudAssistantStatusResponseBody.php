<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponseBody\instanceCloudAssistantStatusSet;
use AlibabaCloud\Tea\Model;

class DescribeCloudAssistantStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceCloudAssistantStatusSet
     */
    public $instanceCloudAssistantStatusSet;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'instanceCloudAssistantStatusSet' => 'InstanceCloudAssistantStatusSet',
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
        if (null !== $this->instanceCloudAssistantStatusSet) {
            $res['InstanceCloudAssistantStatusSet'] = null !== $this->instanceCloudAssistantStatusSet ? $this->instanceCloudAssistantStatusSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudAssistantStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceCloudAssistantStatusSet'])) {
            $model->instanceCloudAssistantStatusSet = instanceCloudAssistantStatusSet::fromMap($map['InstanceCloudAssistantStatusSet']);
        }

        return $model;
    }
}
