<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponseBody\errors;
use AlibabaCloud\Tea\Model;

class GetUmodelDataResponseBody extends Model
{
    /**
     * @var errors[]
     */
    public $errors;

    /**
     * @var mixed[]
     */
    public $links;

    /**
     * @var mixed[]
     */
    public $nodes;

    /**
     * @example 123-123-234-345-123
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalLinksCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalNodesCount;
    protected $_name = [
        'errors' => 'errors',
        'links' => 'links',
        'nodes' => 'nodes',
        'requestId' => 'requestId',
        'totalLinksCount' => 'totalLinksCount',
        'totalNodesCount' => 'totalNodesCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errors) {
            $res['errors'] = [];
            if (null !== $this->errors && \is_array($this->errors)) {
                $n = 0;
                foreach ($this->errors as $item) {
                    $res['errors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->links) {
            $res['links'] = $this->links;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalLinksCount) {
            $res['totalLinksCount'] = $this->totalLinksCount;
        }
        if (null !== $this->totalNodesCount) {
            $res['totalNodesCount'] = $this->totalNodesCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUmodelDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errors'])) {
            if (!empty($map['errors'])) {
                $model->errors = [];
                $n = 0;
                foreach ($map['errors'] as $item) {
                    $model->errors[$n++] = null !== $item ? errors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['links'])) {
            if (!empty($map['links'])) {
                $model->links = $map['links'];
            }
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalLinksCount'])) {
            $model->totalLinksCount = $map['totalLinksCount'];
        }
        if (isset($map['totalNodesCount'])) {
            $model->totalNodesCount = $map['totalNodesCount'];
        }

        return $model;
    }
}
