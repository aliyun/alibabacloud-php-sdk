<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class ListAgentsRequest extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $q;

    /**
     * @var string
     */
    public $requiredRuntime;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'creatorId' => 'CreatorId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'q' => 'Q',
        'requiredRuntime' => 'RequiredRuntime',
        'scope' => 'Scope',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->q) {
            $res['Q'] = $this->q;
        }

        if (null !== $this->requiredRuntime) {
            $res['RequiredRuntime'] = $this->requiredRuntime;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
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
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Q'])) {
            $model->q = $map['Q'];
        }

        if (isset($map['RequiredRuntime'])) {
            $model->requiredRuntime = $map['RequiredRuntime'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
