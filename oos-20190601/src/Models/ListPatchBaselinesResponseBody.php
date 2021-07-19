<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesResponseBody\patchBaselines;
use AlibabaCloud\Tea\Model;

class ListPatchBaselinesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var patchBaselines[]
     */
    public $patchBaselines;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'maxResults'     => 'MaxResults',
        'patchBaselines' => 'PatchBaselines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPatchBaselinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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

        return $model;
    }
}
