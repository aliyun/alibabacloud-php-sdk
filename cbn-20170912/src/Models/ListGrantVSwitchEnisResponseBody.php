<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchEnisResponseBody\grantVSwitchEnis;
use AlibabaCloud\Tea\Model;

class ListGrantVSwitchEnisResponseBody extends Model
{
    /**
     * @var grantVSwitchEnis[]
     */
    public $grantVSwitchEnis;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example DBFE1736-2F33-5309-9954-875B11E9519D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 6
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'grantVSwitchEnis' => 'GrantVSwitchEnis',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantVSwitchEnis) {
            $res['GrantVSwitchEnis'] = [];
            if (null !== $this->grantVSwitchEnis && \is_array($this->grantVSwitchEnis)) {
                $n = 0;
                foreach ($this->grantVSwitchEnis as $item) {
                    $res['GrantVSwitchEnis'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGrantVSwitchEnisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantVSwitchEnis'])) {
            if (!empty($map['GrantVSwitchEnis'])) {
                $model->grantVSwitchEnis = [];
                $n                       = 0;
                foreach ($map['GrantVSwitchEnis'] as $item) {
                    $model->grantVSwitchEnis[$n++] = null !== $item ? grantVSwitchEnis::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
