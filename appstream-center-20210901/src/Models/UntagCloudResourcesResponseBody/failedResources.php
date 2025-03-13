<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponseBody\failedResources\tags;
use AlibabaCloud\Tea\Model;

class failedResources extends Model
{
    /**
     * @description The error code.
     *
     * @example UNTAG_RESOURCE_FAILED
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example Failed to untag resource.
     *
     * @var string
     */
    public $message;

    /**
     * @description The resource IDs.
     *
     * @example aig-00000001
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the cloud resource.
     *
     * Valid values:
     *
     *   AppId: app ID.
     *   WyId: Alibaba Cloud Workspace user ID.
     *   AppInstanceGroupId: delivery group ID.
     *   AliUid: tenant ID.
     *
     * @example AppInstanceGroupId
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags that failed to be removed from the cloud resources.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
