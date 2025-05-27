<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class PageListLabReservationsRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'accountId' => 'AccountId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
