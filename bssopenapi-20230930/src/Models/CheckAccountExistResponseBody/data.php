<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CheckAccountExistResponseBody;

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
    public $nickName;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'accountId' => 'AccountId',
        'nickName' => 'NickName',
        'pk' => 'Pk',
        'result' => 'Result',
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

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
