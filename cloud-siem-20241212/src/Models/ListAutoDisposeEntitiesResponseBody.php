<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAutoDisposeEntitiesResponseBody\autoDecisionEntities;

class ListAutoDisposeEntitiesResponseBody extends Model
{
    /**
     * @var autoDecisionEntities[]
     */
    public $autoDecisionEntities;

    /**
     * @var int
     */
    public $currentPage;

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
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoDecisionEntities' => 'AutoDecisionEntities',
        'currentPage' => 'CurrentPage',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->autoDecisionEntities)) {
            Model::validateArray($this->autoDecisionEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDecisionEntities) {
            if (\is_array($this->autoDecisionEntities)) {
                $res['AutoDecisionEntities'] = [];
                $n1 = 0;
                foreach ($this->autoDecisionEntities as $item1) {
                    $res['AutoDecisionEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AutoDecisionEntities'])) {
            if (!empty($map['AutoDecisionEntities'])) {
                $model->autoDecisionEntities = [];
                $n1 = 0;
                foreach ($map['AutoDecisionEntities'] as $item1) {
                    $model->autoDecisionEntities[$n1] = autoDecisionEntities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
