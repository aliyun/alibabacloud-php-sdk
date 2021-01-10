<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryAddressDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var bool
     */
    public $useAnonymousTbAccount;

    /**
     * @var string
     */
    public $addressInfo;
    protected $_name = [
        'bizId'                 => 'BizId',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
        'addressInfo'           => 'AddressInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->useAnonymousTbAccount) {
            $res['UseAnonymousTbAccount'] = $this->useAnonymousTbAccount;
        }
        if (null !== $this->addressInfo) {
            $res['AddressInfo'] = $this->addressInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAddressDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['UseAnonymousTbAccount'])) {
            $model->useAnonymousTbAccount = $map['UseAnonymousTbAccount'];
        }
        if (isset($map['AddressInfo'])) {
            $model->addressInfo = $map['AddressInfo'];
        }

        return $model;
    }
}
