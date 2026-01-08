<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BindInstagramPageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var string
     */
    public $pageName;
    protected $_name = [
        'accountId' => 'AccountId',
        'connectionStatus' => 'ConnectionStatus',
        'pageId' => 'PageId',
        'pageName' => 'PageName',
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

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }

        if (null !== $this->pageName) {
            $res['PageName'] = $this->pageName;
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

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }

        if (isset($map['PageName'])) {
            $model->pageName = $map['PageName'];
        }

        return $model;
    }
}
