<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainResponseBody;

use AlibabaCloud\Tea\Model;

class outPutDomains extends Model
{
    /**
     * @description The status of the ACL. Valid values:
     *
     *   0: disabled
     *   1: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $aclStatus;

    /**
     * @description The status of protection against HTTP flood attacks. Valid values:
     *
     *   0: disabled
     *   1: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $ccStatus;

    /**
     * @description The domain name that has WAF enabled.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   1: The domain name is added to WAF, or the domain name is valid.
     *   10: The domain name is being added to WAF.
     *   11: The domain name failed to be added to WAF.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The status of WAF. Valid values:
     *
     *   0: disabled
     *   1: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $wafStatus;
    protected $_name = [
        'aclStatus' => 'AclStatus',
        'ccStatus'  => 'CcStatus',
        'domain'    => 'Domain',
        'status'    => 'Status',
        'wafStatus' => 'WafStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->ccStatus) {
            $res['CcStatus'] = $this->ccStatus;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wafStatus) {
            $res['WafStatus'] = $this->wafStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outPutDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['CcStatus'])) {
            $model->ccStatus = $map['CcStatus'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WafStatus'])) {
            $model->wafStatus = $map['WafStatus'];
        }

        return $model;
    }
}
