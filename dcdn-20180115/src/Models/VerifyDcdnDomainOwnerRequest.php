<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class VerifyDcdnDomainOwnerRequest extends Model
{
    /**
     * @description The domain name of which you want to verify the ownership. You can specify only one domain name in each call.
     *
     * @example **example**.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The verification method. Valid values:
     *
     *   **dnsCheck**: by DNS record
     *   **fileCheck**: by verification file
     *
     * @example dnsCheck
     *
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'domainName' => 'DomainName',
        'verifyType' => 'VerifyType',
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
        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyDcdnDomainOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
