<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopOversoldGroupRequest extends Model
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
     * @var string[]
     */
    public $oversoldGroupIds;
    protected $_name = [
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'oversoldGroupIds' => 'OversoldGroupIds',
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
        if (null !== $this->oversoldGroupIds) {
            $res['OversoldGroupIds'] = $this->oversoldGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopOversoldGroupRequest
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
        if (isset($map['OversoldGroupIds'])) {
            if (!empty($map['OversoldGroupIds'])) {
                $model->oversoldGroupIds = $map['OversoldGroupIds'];
            }
        }

        return $model;
    }
}
