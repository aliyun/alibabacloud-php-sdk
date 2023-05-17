<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsersRequest extends Model
{
    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string[]
     */
    public $excludeEndUserIds;

    /**
     * @var string
     */
    public $filter;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orgId;
    protected $_name = [
        'endUserIds'        => 'EndUserIds',
        'excludeEndUserIds' => 'ExcludeEndUserIds',
        'filter'            => 'Filter',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'orgId'             => 'OrgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->excludeEndUserIds) {
            $res['ExcludeEndUserIds'] = $this->excludeEndUserIds;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['ExcludeEndUserIds'])) {
            if (!empty($map['ExcludeEndUserIds'])) {
                $model->excludeEndUserIds = $map['ExcludeEndUserIds'];
            }
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        return $model;
    }
}
