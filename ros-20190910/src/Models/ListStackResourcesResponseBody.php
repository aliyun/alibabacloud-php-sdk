<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponseBody\resources;
use AlibabaCloud\Tea\Model;

class ListStackResourcesResponseBody extends Model
{
    /**
     * @description Details about resources.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the resource. Valid values:
     *
     *   INIT_COMPLETE: The resource is in the pending creation state.
     *   CREATE_COMPLETE: The resource is created.
     *   CREATE_FAILED: The resource fails to be created.
     *   CREATE_IN_PROGRESS: The resource is being created.
     *   UPDATE_IN_PROGRESS: The resource is being updated.
     *   UPDATE_FAILED: The resource fails to be updated.
     *   UPDATE_COMPLETE: The resource is updated.
     *   DELETE_IN_PROGRESS: The resource is being deleted.
     *   DELETE_FAILED: The resource fails to be deleted.
     *   DELETE_COMPLETE: The resource is deleted.
     *   CHECK_IN_PROGRESS: The resource is being validated.
     *   CHECK_FAILED: The resource fails to be validated.
     *   CHECK_COMPLETE: The resource is validated.
     *   IMPORT_IN_PROGRESS: The resource is being imported.
     *   IMPORT_FAILED: The resource fails to be imported.
     *   IMPORT_COMPLETE: The resource is imported.
     *
     * @var resources[]
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
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
