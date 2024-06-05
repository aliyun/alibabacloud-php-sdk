<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\BatchRequest\requests;
use AlibabaCloud\Tea\Model;

class BatchRequest extends Model
{
    /**
     * @description The child requests.
     *
     * This parameter is required.
     * @var requests[]
     */
    public $requests;

    /**
     * @description The type of the resource that you want to manage. Valid values:
     *
     *   file: a file.
     *   drive: an individual drive or a team drive.
     *   user: a user.
     *   group: a group.
     *   membership: a group member.
     *   share_link: a share.
     *   async_task: an asynchronous task.
     *
     * <!---->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * This parameter is required.
     * @example file
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'requests' => 'requests',
        'resource' => 'resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requests) {
            $res['requests'] = [];
            if (null !== $this->requests && \is_array($this->requests)) {
                $n = 0;
                foreach ($this->requests as $item) {
                    $res['requests'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requests'])) {
            if (!empty($map['requests'])) {
                $model->requests = [];
                $n               = 0;
                foreach ($map['requests'] as $item) {
                    $model->requests[$n++] = null !== $item ? requests::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        return $model;
    }
}
