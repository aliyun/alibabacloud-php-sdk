<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryIntentsRequest extends Model
{
    /**
     * @var string
     */
    public $intentName;

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
        'intentName' => 'IntentName',
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
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
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
     * @return QueryIntentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
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
