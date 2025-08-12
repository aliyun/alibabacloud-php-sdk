<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupUserRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $filter;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
