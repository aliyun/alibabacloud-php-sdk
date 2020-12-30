<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckTransferInFeasibilityRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $transferAuthorizationCode;
    protected $_name = [
        'lang'                      => 'Lang',
        'userClientIp'              => 'UserClientIp',
        'domainName'                => 'DomainName',
        'transferAuthorizationCode' => 'TransferAuthorizationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->transferAuthorizationCode) {
            $res['TransferAuthorizationCode'] = $this->transferAuthorizationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTransferInFeasibilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['TransferAuthorizationCode'])) {
            $model->transferAuthorizationCode = $map['TransferAuthorizationCode'];
        }

        return $model;
    }
}
