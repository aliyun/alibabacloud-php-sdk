<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListTaggedResourcesResponseBody extends Model
{
    /**
     * @description The token used to obtain more results. You do not need to provide this parameter in the first call. The tokens for subsequent queries are obtained from the returned results.
     *
     * @example a-service
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The information about tagged services.
     *
     * @var resource[]
     */
    public $resources;
    protected $_name = [
        'nextToken' => 'nextToken',
        'resources' => 'resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->resources) {
            $res['resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaggedResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? Resource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
