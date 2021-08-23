<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryEntitiesRequest extends Model
{
    /**
     * @var string
     */
    public $entityName;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'entityName' => 'EntityName',
        'dialogId'   => 'DialogId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEntitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
