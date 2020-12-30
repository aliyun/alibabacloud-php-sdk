<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class TransferInReenterTransferAuthorizationCodeRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

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
    public $transferAuthorizationCode;
    protected $_name = [
        'domainName'                => 'DomainName',
        'lang'                      => 'Lang',
        'userClientIp'              => 'UserClientIp',
        'transferAuthorizationCode' => 'TransferAuthorizationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->transferAuthorizationCode) {
            $res['TransferAuthorizationCode'] = $this->transferAuthorizationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferInReenterTransferAuthorizationCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['TransferAuthorizationCode'])) {
            $model->transferAuthorizationCode = $map['TransferAuthorizationCode'];
        }

        return $model;
    }
}
