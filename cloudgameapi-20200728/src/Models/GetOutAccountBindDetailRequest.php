<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetOutAccountBindDetailRequest extends Model
{
    /**
     * @var string
     */
    public $outAccountType;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountDomain;
    protected $_name = [
        'outAccountType' => 'OutAccountType',
        'accountId'      => 'AccountId',
        'accountDomain'  => 'AccountDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outAccountType) {
            $res['OutAccountType'] = $this->outAccountType;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
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
        if (isset($map['OutAccountType'])) {
            $model->outAccountType = $map['OutAccountType'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }

        return $model;
    }
}
