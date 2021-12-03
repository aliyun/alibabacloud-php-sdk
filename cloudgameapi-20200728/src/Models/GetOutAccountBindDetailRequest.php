<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetOutAccountBindDetailRequest extends Model
{
    /**
     * @var string
     */
    public $accountDomain;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $outAccountType;
    protected $_name = [
        'accountDomain'  => 'AccountDomain',
        'accountId'      => 'AccountId',
        'outAccountType' => 'OutAccountType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->outAccountType) {
            $res['OutAccountType'] = $this->outAccountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOutAccountBindDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['OutAccountType'])) {
            $model->outAccountType = $map['OutAccountType'];
        }

        return $model;
    }
}
