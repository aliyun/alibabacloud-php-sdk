<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAccountResponse\account;
use AlibabaCloud\Tea\Model;

class UpdateAccountResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var account
     */
    public $account;
    protected $_name = [
        'requestId' => 'RequestId',
        'account'   => 'Account',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('account', $this->account, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->account) {
            $res['Account'] = null !== $this->account ? $this->account->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Account'])) {
            $model->account = account::fromMap($map['Account']);
        }

        return $model;
    }
}
