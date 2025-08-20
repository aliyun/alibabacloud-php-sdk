<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesResponseBody\resourceTypeSummaries;

class ListResourceTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypeSummaries[]
     */
    public $resourceTypeSummaries;

    /**
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceTypeSummaries' => 'ResourceTypeSummaries',
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypeSummaries)) {
            Model::validateArray($this->resourceTypeSummaries);
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceTypeSummaries) {
            if (\is_array($this->resourceTypeSummaries)) {
                $res['ResourceTypeSummaries'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeSummaries as $item1) {
                    $res['ResourceTypeSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceTypeSummaries'])) {
            if (!empty($map['ResourceTypeSummaries'])) {
                $model->resourceTypeSummaries = [];
                $n1 = 0;
                foreach ($map['ResourceTypeSummaries'] as $item1) {
                    $model->resourceTypeSummaries[$n1] = resourceTypeSummaries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
