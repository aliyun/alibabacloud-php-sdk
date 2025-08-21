<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class QueryDevicesByAccountRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var int
     */
    public $appKey;
    protected $_name = [
        'account' => 'Account',
        'appKey' => 'AppKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        return $model;
    }
}
