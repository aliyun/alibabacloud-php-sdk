<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var int
     */
    public $aclStatus;

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
    public $domain;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $wafMode;

    /**
     * @var int
     */
    public $wafStatus;
    protected $_name = [
        'accessType' => 'AccessType',
        'aclStatus'  => 'AclStatus',
        'ccMode'     => 'CcMode',
        'ccStatus'   => 'CcStatus',
        'domain'     => 'Domain',
        'owner'      => 'Owner',
        'status'     => 'Status',
        'version'    => 'Version',
        'wafMode'    => 'WafMode',
        'wafStatus'  => 'WafStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->ccMode) {
            $res['CcMode'] = $this->ccMode;
        }
        if (null !== $this->ccStatus) {
            $res['CcStatus'] = $this->ccStatus;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->wafMode) {
            $res['WafMode'] = $this->wafMode;
        }
        if (null !== $this->wafStatus) {
            $res['WafStatus'] = $this->wafStatus;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['CcMode'])) {
            $model->ccMode = $map['CcMode'];
        }
        if (isset($map['CcStatus'])) {
            $model->ccStatus = $map['CcStatus'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WafMode'])) {
            $model->wafMode = $map['WafMode'];
        }
        if (isset($map['WafStatus'])) {
            $model->wafStatus = $map['WafStatus'];
        }

        return $model;
    }
}
