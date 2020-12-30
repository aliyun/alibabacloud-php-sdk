<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $ccMode;

    /**
     * @var int
     */
    public $ccStatus;

    /**
     * @var string
     */
    public $accessType;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $aclStatus;

    /**
     * @var int
     */
    public $wafStatus;

    /**
     * @var int
     */
    public $wafMode;
    protected $_name = [
        'status'     => 'Status',
        'domain'     => 'Domain',
        'owner'      => 'Owner',
        'ccMode'     => 'CcMode',
        'ccStatus'   => 'CcStatus',
        'accessType' => 'AccessType',
        'version'    => 'Version',
        'aclStatus'  => 'AclStatus',
        'wafStatus'  => 'WafStatus',
        'wafMode'    => 'WafMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ccMode) {
            $res['CcMode'] = $this->ccMode;
        }
        if (null !== $this->ccStatus) {
            $res['CcStatus'] = $this->ccStatus;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->wafStatus) {
            $res['WafStatus'] = $this->wafStatus;
        }
        if (null !== $this->wafMode) {
            $res['WafMode'] = $this->wafMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['CcMode'])) {
            $model->ccMode = $map['CcMode'];
        }
        if (isset($map['CcStatus'])) {
            $model->ccStatus = $map['CcStatus'];
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['WafStatus'])) {
            $model->wafStatus = $map['WafStatus'];
        }
        if (isset($map['WafMode'])) {
            $model->wafMode = $map['WafMode'];
        }

        return $model;
    }
}
