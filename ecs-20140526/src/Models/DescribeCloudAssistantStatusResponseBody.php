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
     * @var instanceCloudAssistantStatusSet[]
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
            $res['InstanceCloudAssistantStatusSet'] = [];
            if (null !== $this->instanceCloudAssistantStatusSet && \is_array($this->instanceCloudAssistantStatusSet)) {
                $n = 0;
                foreach ($this->instanceCloudAssistantStatusSet as $item) {
                    $res['InstanceCloudAssistantStatusSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['InstanceCloudAssistantStatusSet'])) {
                $model->instanceCloudAssistantStatusSet = [];
                $n                                      = 0;
                foreach ($map['InstanceCloudAssistantStatusSet'] as $item) {
                    $model->instanceCloudAssistantStatusSet[$n++] = null !== $item ? instanceCloudAssistantStatusSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
