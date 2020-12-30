<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class GetExpenseSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $businessType;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'version'       => 'Version',
        'startDate'     => 'StartDate',
        'endDate'       => 'EndDate',
        'domain'        => 'Domain',
        'region'        => 'Region',
        'ispName'       => 'IspName',
        'platformType'  => 'PlatformType',
        'businessType'  => 'BusinessType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExpenseSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        return $model;
    }
}
