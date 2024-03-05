<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\VerifyResponseBody\data;

use AlibabaCloud\Tea\Model;

class allMultiAccountUids extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'accountId'   => 'accountId',
        'displayName' => 'displayName',
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
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allMultiAccountUids
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
