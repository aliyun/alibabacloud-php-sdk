<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class ListAllEndEntityInstanceRequest extends Model
{
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
    public $parentId;

    /**
     * @var int
     */
    public $recursiveChildren;

    /**
     * @var int
     */
    public $showSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'parentId' => 'ParentId',
        'recursiveChildren' => 'RecursiveChildren',
        'showSize' => 'ShowSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->recursiveChildren) {
            $res['RecursiveChildren'] = $this->recursiveChildren;
        }

        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
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

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['RecursiveChildren'])) {
            $model->recursiveChildren = $map['RecursiveChildren'];
        }

        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
