<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsResponseBody\releaseVersions;

class ListReleaseVersionsResponseBody extends Model
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
     * @var releaseVersions[]
     */
    public $releaseVersions;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'releaseVersions' => 'ReleaseVersions',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->releaseVersions)) {
            Model::validateArray($this->releaseVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->releaseVersions) {
            if (\is_array($this->releaseVersions)) {
                $res['ReleaseVersions'] = [];
                $n1                     = 0;
                foreach ($this->releaseVersions as $item1) {
                    $res['ReleaseVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ReleaseVersions'])) {
            if (!empty($map['ReleaseVersions'])) {
                $model->releaseVersions = [];
                $n1                     = 0;
                foreach ($map['ReleaseVersions'] as $item1) {
                    $model->releaseVersions[$n1++] = releaseVersions::fromMap($item1);
                }
            }
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
