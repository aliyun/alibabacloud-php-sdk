<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @example example.aliyundoc.com.*****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $description;

    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @example vs
     *
     * @var string
     */
    public $domainType;

    /**
     * @example 2021-07-19T10:27:23Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2021-07-19T10:27:23Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @example off
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @example domestic
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'cname'        => 'Cname',
        'description'  => 'Description',
        'domainName'   => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'domainType'   => 'DomainType',
        'gmtCreated'   => 'GmtCreated',
        'gmtModified'  => 'GmtModified',
        'region'       => 'Region',
        'SSLProtocol'  => 'SSLProtocol',
        'scope'        => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
