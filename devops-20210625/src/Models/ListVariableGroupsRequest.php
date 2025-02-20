<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListVariableGroupsRequest extends Model
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
     * @var string
     */
    public $pageOrder;
    /**
     * @var string
     */
    public $pageSort;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken'  => 'nextToken',
        'pageOrder'  => 'pageOrder',
        'pageSort'   => 'pageSort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->pageOrder) {
            $res['pageOrder'] = $this->pageOrder;
        }

        if (null !== $this->pageSort) {
            $res['pageSort'] = $this->pageSort;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['pageOrder'])) {
            $model->pageOrder = $map['pageOrder'];
        }

        if (isset($map['pageSort'])) {
            $model->pageSort = $map['pageSort'];
        }

        return $model;
    }
}
