<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferOutByAuthorizationCodeRequest;

use AlibabaCloud\Dara\Model;

class transferOutParamList extends Model
{
    /**
     * @var string
     */
    public $authorizationCode;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
