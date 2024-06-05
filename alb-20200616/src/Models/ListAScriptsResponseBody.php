<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListAScriptsResponseBody\AScripts;
use AlibabaCloud\Tea\Model;

class ListAScriptsResponseBody extends Model
{
    /**
     * @description The AScript rules.
     *
     * @var AScripts[]
     */
    public $AScripts;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value is returned for **NextToken**, the value is the token that determines the start point of the next query.
     *
     * This parameter is required.
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 2CA81429-F160-593A-8AB5-A2A9617845B9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * > This parameter is optional. By default, this parameter is not returned.
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'AScripts'   => 'AScripts',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScripts) {
            $res['AScripts'] = [];
            if (null !== $this->AScripts && \is_array($this->AScripts)) {
                $n = 0;
                foreach ($this->AScripts as $item) {
                    $res['AScripts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAScriptsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScripts'])) {
            if (!empty($map['AScripts'])) {
                $model->AScripts = [];
                $n               = 0;
                foreach ($map['AScripts'] as $item) {
                    $model->AScripts[$n++] = null !== $item ? AScripts::fromMap($item) : $item;
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
