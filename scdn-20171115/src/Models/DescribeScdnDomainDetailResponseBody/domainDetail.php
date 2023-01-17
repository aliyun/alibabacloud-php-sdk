<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainDetailResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainDetailResponseBody\domainDetail\sources;
use AlibabaCloud\Tea\Model;

class domainDetail extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @example example.com.scdn7mhp.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example audit failed
     *
     * @var string
     */
    public $description;

    /**
     * @example example.com
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
     * @example 2017-11-27T06:51:26Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2017-11-27T06:51:26Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example rg-acfmyuji4b6r4ry
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @example xxx
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @example overseas
     *
     * @var string
     */
    public $scope;

    /**
     * @var sources
     */
    public $sources;
    protected $_name = [
        'certName'        => 'CertName',
        'cname'           => 'Cname',
        'description'     => 'Description',
        'domainName'      => 'DomainName',
        'domainStatus'    => 'DomainStatus',
        'gmtCreated'      => 'GmtCreated',
        'gmtModified'     => 'GmtModified',
        'resourceGroupId' => 'ResourceGroupId',
        'SSLProtocol'     => 'SSLProtocol',
        'SSLPub'          => 'SSLPub',
        'scope'           => 'Scope',
        'sources'         => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
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
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
