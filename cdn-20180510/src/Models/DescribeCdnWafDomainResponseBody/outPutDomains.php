<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnWafDomainResponseBody;

use AlibabaCloud\Tea\Model;

class outPutDomains extends Model
{
    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $ccStatus;

    /**
     * @var string
     */
    public $wafStatus;
    protected $_name = [
        'aclStatus' => 'AclStatus',
        'status'    => 'Status',
        'domain'    => 'Domain',
        'ccStatus'  => 'CcStatus',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ccStatus) {
            $res['CcStatus'] = $this->ccStatus;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['CcStatus'])) {
            $model->ccStatus = $map['CcStatus'];
        }
        if (isset($map['WafStatus'])) {
            $model->wafStatus = $map['WafStatus'];
        }

        return $model;
    }
}
