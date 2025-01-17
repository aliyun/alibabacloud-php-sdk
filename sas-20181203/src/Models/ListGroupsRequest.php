<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var bool
     */
    public $useNextToken;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'lang'         => 'Lang',
        'nextToken'    => 'NextToken',
        'pageSize'     => 'PageSize',
        'useNextToken' => 'UseNextToken',
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->useNextToken) {
            $res['UseNextToken'] = $this->useNextToken;
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['UseNextToken'])) {
            $model->useNextToken = $map['UseNextToken'];
        }

        return $model;
    }
}
