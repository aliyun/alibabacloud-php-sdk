<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeVersionsResponseBody\resourceTypeVersions;

class ListResourceTypeVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypeVersions[]
     */
    public $resourceTypeVersions;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceTypeVersions' => 'ResourceTypeVersions',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypeVersions)) {
            Model::validateArray($this->resourceTypeVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceTypeVersions) {
            if (\is_array($this->resourceTypeVersions)) {
                $res['ResourceTypeVersions'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeVersions as $item1) {
                    $res['ResourceTypeVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceTypeVersions'])) {
            if (!empty($map['ResourceTypeVersions'])) {
                $model->resourceTypeVersions = [];
                $n1 = 0;
                foreach ($map['ResourceTypeVersions'] as $item1) {
                    $model->resourceTypeVersions[$n1++] = resourceTypeVersions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
