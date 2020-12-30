<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class QueryDevicesByAccountRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $account;
    protected $_name = [
        'appKey'  => 'AppKey',
        'account' => 'Account',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDevicesByAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        return $model;
    }
}
