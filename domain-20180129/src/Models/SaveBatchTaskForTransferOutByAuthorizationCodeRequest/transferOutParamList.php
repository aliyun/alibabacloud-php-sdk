<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferOutByAuthorizationCodeRequest;

use AlibabaCloud\Tea\Model;

class transferOutParamList extends Model
{
    /**
     * @example Test2o#Lck
     *
     * @var string
     */
    public $authorizationCode;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'domainName'        => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferOutParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
