<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesResponseBody\workspaces;
use AlibabaCloud\Tea\Model;

class ListWorkspacesResponseBody extends Model
{
    /**
     * @example 8D7B2E70-F770-505B-A672-09F1D8F2EC1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $resourceLimits;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var workspaces[]
     */
    public $workspaces;
    protected $_name = [
        'requestId'      => 'RequestId',
        'resourceLimits' => 'ResourceLimits',
        'totalCount'     => 'TotalCount',
        'workspaces'     => 'Workspaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceLimits) {
            $res['ResourceLimits'] = $this->resourceLimits;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->workspaces) {
            $res['Workspaces'] = [];
            if (null !== $this->workspaces && \is_array($this->workspaces)) {
                $n = 0;
                foreach ($this->workspaces as $item) {
                    $res['Workspaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceLimits'])) {
            $model->resourceLimits = $map['ResourceLimits'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Workspaces'])) {
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n                 = 0;
                foreach ($map['Workspaces'] as $item) {
                    $model->workspaces[$n++] = null !== $item ? workspaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
