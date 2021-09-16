<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail\sources;
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
    public $weight;

    /**
     * @var string
     */
    public $SSLPub;

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
    public $certName;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var sources
     */
    public $sources;
    protected $_name = [
        'gmtCreated'   => 'GmtCreated',
        'weight'       => 'Weight',
        'SSLPub'       => 'SSLPub',
        'description'  => 'Description',
        'SSLProtocol'  => 'SSLProtocol',
        'certName'     => 'CertName',
        'scope'        => 'Scope',
        'cname'        => 'Cname',
        'domainStatus' => 'DomainStatus',
        'gmtModified'  => 'GmtModified',
        'domainName'   => 'DomainName',
        'sources'      => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
