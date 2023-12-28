<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicPatchBaselinesResponseBody\patchBaselines;
use AlibabaCloud\Tea\Model;

class ListPublicPatchBaselinesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var patchBaselines[]
     */
    public $patchBaselines;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'patchBaselines' => 'PatchBaselines',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->patchBaselines) {
            $res['PatchBaselines'] = [];
            if (null !== $this->patchBaselines && \is_array($this->patchBaselines)) {
                $n = 0;
                foreach ($this->patchBaselines as $item) {
                    $res['PatchBaselines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicPatchBaselinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PatchBaselines'])) {
            if (!empty($map['PatchBaselines'])) {
                $model->patchBaselines = [];
                $n                     = 0;
                foreach ($map['PatchBaselines'] as $item) {
                    $model->patchBaselines[$n++] = null !== $item ? patchBaselines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
