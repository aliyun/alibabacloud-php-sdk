<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportHeaders;

use AlibabaCloud\Tea\Model;

class accountContext extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'accountId' => 'accountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        return $model;
    }
}
