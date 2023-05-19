<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class VerifyDomainOwnerRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $globalResourcePlan;

    /**
     * @example dnsCheck
     *
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'domainName'         => 'DomainName',
        'globalResourcePlan' => 'GlobalResourcePlan',
        'verifyType'         => 'VerifyType',
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
        if (null !== $this->globalResourcePlan) {
            $res['GlobalResourcePlan'] = $this->globalResourcePlan;
        }
        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyDomainOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GlobalResourcePlan'])) {
            $model->globalResourcePlan = $map['GlobalResourcePlan'];
        }
        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
