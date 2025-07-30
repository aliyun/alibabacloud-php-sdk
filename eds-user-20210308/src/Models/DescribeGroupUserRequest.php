<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupUserRequest extends Model
{
    /**
     * @example ENTERPRISE
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $filter;

    /**
     * @example ug-12341234****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example co-0esnf80jab***
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'bizType' => 'BizType',
        'filter' => 'Filter',
        'groupId' => 'GroupId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'solutionId' => 'SolutionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
