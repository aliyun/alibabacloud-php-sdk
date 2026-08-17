<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDomainItemsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $itemValue;

    /**
     * @var string
     */
    public $listId;

    /**
     * @var string
     */
    public $listType;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'itemValue' => 'ItemValue',
        'listId' => 'ListId',
        'listType' => 'ListType',
        'pageSize' => 'PageSize',
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

        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
        }

        if (null !== $this->listId) {
            $res['ListId'] = $this->listId;
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
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

        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }

        if (isset($map['ListId'])) {
            $model->listId = $map['ListId'];
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
