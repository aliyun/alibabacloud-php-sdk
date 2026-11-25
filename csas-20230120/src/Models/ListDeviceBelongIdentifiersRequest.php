<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDeviceBelongIdentifiersRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $identifierIds;

    /**
     * @var string
     */
    public $identifierType;

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
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'identifierIds' => 'IdentifierIds',
        'identifierType' => 'IdentifierType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->identifierIds)) {
            Model::validateArray($this->identifierIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->identifierIds) {
            if (\is_array($this->identifierIds)) {
                $res['IdentifierIds'] = [];
                $n1 = 0;
                foreach ($this->identifierIds as $item1) {
                    $res['IdentifierIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->identifierType) {
            $res['IdentifierType'] = $this->identifierType;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['IdentifierIds'])) {
            if (!empty($map['IdentifierIds'])) {
                $model->identifierIds = [];
                $n1 = 0;
                foreach ($map['IdentifierIds'] as $item1) {
                    $model->identifierIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IdentifierType'])) {
            $model->identifierType = $map['IdentifierType'];
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

        return $model;
    }
}
