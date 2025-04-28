<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponseBody\accountList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponseBody\accountList\DBAccount\tags;

class DBAccount extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName' => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
