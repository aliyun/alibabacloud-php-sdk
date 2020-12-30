<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderTransferRequest;

use AlibabaCloud\Tea\Model;

class orderTransferParam extends Model
{
    /**
     * @var bool
     */
    public $permitPremiumTransfer;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $authorizationCode;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'permitPremiumTransfer' => 'PermitPremiumTransfer',
        'registrantProfileId'   => 'RegistrantProfileId',
        'authorizationCode'     => 'AuthorizationCode',
        'domainName'            => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permitPremiumTransfer) {
            $res['PermitPremiumTransfer'] = $this->permitPremiumTransfer;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
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
     * @return orderTransferParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermitPremiumTransfer'])) {
            $model->permitPremiumTransfer = $map['PermitPremiumTransfer'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
