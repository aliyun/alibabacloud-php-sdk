<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserRequest\addCommand;

use AlibabaCloud\Dara\Model;

class sourceUserList extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $dingNumber;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'accountName' => 'AccountName',
        'dingNumber' => 'DingNumber',
        'displayName' => 'DisplayName',
        'mail' => 'Mail',
        'mobilePhone' => 'MobilePhone',
        'sourceId' => 'SourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->dingNumber) {
            $res['DingNumber'] = $this->dingNumber;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }

        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['DingNumber'])) {
            $model->dingNumber = $map['DingNumber'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }

        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
