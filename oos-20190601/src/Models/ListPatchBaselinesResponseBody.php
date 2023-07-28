<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesResponseBody\patchBaselines;
use AlibabaCloud\Tea\Model;

class ListPatchBaselinesResponseBody extends Model
{
    /**
     * @description The type of the operating system.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC
     *
     * @example The number of entries returned on each page.
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Indicates whether the patch baseline is set as the default patch baseline.
     *
     * @var patchBaselines[]
     */
    public $patchBaselines;

    /**
     * @description The details of the patch baselines.
     *
     * @example 432996A1-03C0-5C4C-A8E6-66C4110765B8
     *
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
     * @return ListPatchBaselinesResponseBody
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
