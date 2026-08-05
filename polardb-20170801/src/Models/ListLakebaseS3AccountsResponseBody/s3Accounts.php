<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ListLakebaseS3AccountsResponseBody;

use AlibabaCloud\Dara\Model;

class s3Accounts extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $userAccAk;

    /**
     * @var string
     */
    public $userAccSk;
    protected $_name = [
        'accountType' => 'AccountType',
        'userAccAk' => 'UserAccAk',
        'userAccSk' => 'UserAccSk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->userAccAk) {
            $res['UserAccAk'] = $this->userAccAk;
        }

        if (null !== $this->userAccSk) {
            $res['UserAccSk'] = $this->userAccSk;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['UserAccAk'])) {
            $model->userAccAk = $map['UserAccAk'];
        }

        if (isset($map['UserAccSk'])) {
            $model->userAccSk = $map['UserAccSk'];
        }

        return $model;
    }
}
