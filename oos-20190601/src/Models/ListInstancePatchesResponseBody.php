<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchesResponseBody\patches;
use AlibabaCloud\Tea\Model;

class ListInstancePatchesResponseBody extends Model
{
    /**
     * @description The information about the patch.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ
     *
     * @example The ID of the request.
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The level of the severity.
     *
     * @var patches[]
     */
    public $patches;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 0A615755-9C86-5EA6-BF9E-6E8F1AFF9403
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'patches'    => 'Patches',
        'requestId'  => 'RequestId',
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
        if (null !== $this->patches) {
            $res['Patches'] = [];
            if (null !== $this->patches && \is_array($this->patches)) {
                $n = 0;
                foreach ($this->patches as $item) {
                    $res['Patches'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListInstancePatchesResponseBody
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
        if (isset($map['Patches'])) {
            if (!empty($map['Patches'])) {
                $model->patches = [];
                $n              = 0;
                foreach ($map['Patches'] as $item) {
                    $model->patches[$n++] = null !== $item ? patches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
