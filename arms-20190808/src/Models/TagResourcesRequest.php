<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The resource IDs. You can specify a maximum of 50 resource IDs.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the ARMS resources for which you want to modify tags. Valid values:
     *
     *   WEB: Browser Monitoring
     *   APPLICATION: Application Monitoring
     *   PROMETHEUS: Managed Service for Prometheus
     *   SYNTHETICTASK: Synthetic Monitoring
     *   ALERTRULE: Application Monitoring alert rule
     *   PROMETHEUSALERTRULE: Managed Service for Prometheus alert rule
     *   XTRACEAPP: Managed Service for OpenTelemetry
     *
     * @example PROMETHEUS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags to add to the resource. You can specify a maximum of 20 tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
