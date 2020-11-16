<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainDetailResponse;

use AlibabaCloud\Tea\Model;

class domainDetail extends Model
{
    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $liveDomainType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $SSLPub;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $certName;
    protected $_name = [
        'gmtCreated'     => 'GmtCreated',
        'gmtModified'    => 'GmtModified',
        'domainStatus'   => 'DomainStatus',
        'cname'          => 'Cname',
        'domainName'     => 'DomainName',
        'liveDomainType' => 'LiveDomainType',
        'region'         => 'Region',
        'description'    => 'Description',
        'SSLProtocol'    => 'SSLProtocol',
        'SSLPub'         => 'SSLPub',
        'scope'          => 'Scope',
        'certName'       => 'CertName',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreated', $this->gmtCreated, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('domainStatus', $this->domainStatus, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('liveDomainType', $this->liveDomainType, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('SSLProtocol', $this->SSLProtocol, true);
        Model::validateRequired('SSLPub', $this->SSLPub, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('certName', $this->certName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        return $model;
    }
}
