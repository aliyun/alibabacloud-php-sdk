<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesResponseBody\failedResources;

class TagCloudResourcesResponseBody extends Model
{
    /**
     * @var failedResources[]
     */
    public $failedResources;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedResources' => 'FailedResources',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedResources)) {
            Model::validateArray($this->failedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResources) {
            if (\is_array($this->failedResources)) {
                $res['FailedResources'] = [];
                $n1 = 0;
                foreach ($this->failedResources as $item1) {
                    $res['FailedResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailedResources'])) {
            if (!empty($map['FailedResources'])) {
                $model->failedResources = [];
                $n1 = 0;
                foreach ($map['FailedResources'] as $item1) {
                    $model->failedResources[$n1++] = failedResources::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
