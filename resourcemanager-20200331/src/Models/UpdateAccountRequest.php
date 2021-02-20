<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountRequest extends Model
{
    /**
     * @var string
     */
    public $newDisplayName;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'newDisplayName' => 'NewDisplayName',
        'accountId'      => 'AccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
