<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTagResourcesResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTagResourcesResponseBody\data\tagResources;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example d09e2b63e1b12d905b7080ff70
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example F00C6A70-C782-5DD6-9D11-0CFC710100C7
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'nextToken'    => 'nextToken',
        'requestId'    => 'requestId',
        'tagResources' => 'tagResources',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->tagResources) {
            $res['tagResources'] = [];
            if (null !== $this->tagResources && \is_array($this->tagResources)) {
                $n = 0;
                foreach ($this->tagResources as $item) {
                    $res['tagResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['tagResources'])) {
            if (!empty($map['tagResources'])) {
                $model->tagResources = [];
                $n                   = 0;
                foreach ($map['tagResources'] as $item) {
                    $model->tagResources[$n++] = null !== $item ? tagResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
