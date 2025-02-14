<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\environmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\routeInfo;

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
        'details'         => 'details',
        'environmentInfo' => 'environmentInfo',
        'resourceId'      => 'resourceId',
        'resourceName'    => 'resourceName',
        'resourceType'    => 'resourceType',
        'routeInfo'       => 'routeInfo',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        if (null !== $this->environmentInfo) {
            $this->environmentInfo->validate();
        }
        if (null !== $this->routeInfo) {
            $this->routeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['details'] = [];
                $n1             = 0;
                foreach ($this->details as $item1) {
                    $res['details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toArray($noStream) : $this->environmentInfo;
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
            $res['routeInfo'] = null !== $this->routeInfo ? $this->routeInfo->toArray($noStream) : $this->routeInfo;
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
        if (isset($map['details'])) {
            if (!empty($map['details'])) {
                $model->details = [];
                $n1             = 0;
                foreach ($map['details'] as $item1) {
                    $model->details[$n1++] = details::fromMap($item1);
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
