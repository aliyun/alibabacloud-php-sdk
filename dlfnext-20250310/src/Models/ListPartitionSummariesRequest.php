<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListPartitionSummariesRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ""
     *
     * @var string
     */
    public $pageToken;

    /**
     * @example hh=10
     *
     * @var string
     */
    public $partitionNamePattern;
    protected $_name = [
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
        'partitionNamePattern' => 'partitionNamePattern',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->pageToken) {
            $res['pageToken'] = $this->pageToken;
        }
        if (null !== $this->partitionNamePattern) {
            $res['partitionNamePattern'] = $this->partitionNamePattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPartitionSummariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }
        if (isset($map['partitionNamePattern'])) {
            $model->partitionNamePattern = $map['partitionNamePattern'];
        }

        return $model;
    }
}
