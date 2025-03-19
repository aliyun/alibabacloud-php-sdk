<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\environmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\routeInfo;
use AlibabaCloud\Tea\Model;

class conflicts extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @var environmentInfo
     */
    public $environmentInfo;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var routeInfo
     */
    public $routeInfo;
    protected $_name = [
        'details' => 'details',
        'environmentInfo' => 'environmentInfo',
        'resourceId' => 'resourceId',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
        'routeInfo' => 'routeInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->routeInfo) {
            $res['routeInfo'] = null !== $this->routeInfo ? $this->routeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conflicts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['details'])) {
            if (!empty($map['details'])) {
                $model->details = [];
                $n = 0;
                foreach ($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = environmentInfo::fromMap($map['environmentInfo']);
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['routeInfo'])) {
            $model->routeInfo = routeInfo::fromMap($map['routeInfo']);
        }

        return $model;
    }
}
