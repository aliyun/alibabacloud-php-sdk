<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponseBody\instanceCloudAssistantStatusSet\instanceCloudAssistantStatus;

class instanceCloudAssistantStatusSet extends Model
{
    /**
     * @var instanceCloudAssistantStatus[]
     */
    public $instanceCloudAssistantStatus;
    protected $_name = [
        'instanceCloudAssistantStatus' => 'InstanceCloudAssistantStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instanceCloudAssistantStatus)) {
            Model::validateArray($this->instanceCloudAssistantStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCloudAssistantStatus) {
            if (\is_array($this->instanceCloudAssistantStatus)) {
                $res['InstanceCloudAssistantStatus'] = [];
                $n1 = 0;
                foreach ($this->instanceCloudAssistantStatus as $item1) {
                    $res['InstanceCloudAssistantStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCloudAssistantStatus'])) {
            if (!empty($map['InstanceCloudAssistantStatus'])) {
                $model->instanceCloudAssistantStatus = [];
                $n1 = 0;
                foreach ($map['InstanceCloudAssistantStatus'] as $item1) {
                    $model->instanceCloudAssistantStatus[$n1] = instanceCloudAssistantStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
