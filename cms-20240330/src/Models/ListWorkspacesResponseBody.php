<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponseBody\workspaces;
use AlibabaCloud\Tea\Model;

class ListWorkspacesResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example xxxxxxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 264C3E89-XXXX-XXXX-XXXX-CE9C2196C7DC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;

    /**
     * @var workspaces[]
     */
    public $workspaces;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'total' => 'total',
        'workspaces' => 'workspaces',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->workspaces) {
            $res['workspaces'] = [];
            if (null !== $this->workspaces && \is_array($this->workspaces)) {
                $n = 0;
                foreach ($this->workspaces as $item) {
                    $res['workspaces'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }
        if (isset($map['workspaces'])) {
            if (!empty($map['workspaces'])) {
                $model->workspaces = [];
                $n = 0;
                foreach ($map['workspaces'] as $item) {
                    $model->workspaces[$n++] = null !== $item ? workspaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
