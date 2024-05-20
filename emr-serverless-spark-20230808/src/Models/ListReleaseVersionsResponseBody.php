<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponseBody\releaseVersions;
use AlibabaCloud\Tea\Model;

class ListReleaseVersionsResponseBody extends Model
{
    /**
     * @description 一次获取的最大记录数。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 下一页TOKEN。
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var releaseVersions[]
     */
    public $releaseVersions;

    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 记录总数。
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'      => 'maxResults',
        'nextToken'       => 'nextToken',
        'releaseVersions' => 'releaseVersions',
        'requestId'       => 'requestId',
        'totalCount'      => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->releaseVersions) {
            $res['releaseVersions'] = [];
            if (null !== $this->releaseVersions && \is_array($this->releaseVersions)) {
                $n = 0;
                foreach ($this->releaseVersions as $item) {
                    $res['releaseVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReleaseVersionsResponseBody
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
        if (isset($map['releaseVersions'])) {
            if (!empty($map['releaseVersions'])) {
                $model->releaseVersions = [];
                $n                      = 0;
                foreach ($map['releaseVersions'] as $item) {
                    $model->releaseVersions[$n++] = null !== $item ? releaseVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
