<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponseBody\domains;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponseBody\domains\pageData\sources;

class pageData extends Model
{
    /**
     * @var string
     */
    public $cdnType;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $coverage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainStatus;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sandbox;

    /**
     * @var sources
     */
    public $sources;

    /**
     * @var string
     */
    public $sslProtocol;
    protected $_name = [
        'cdnType' => 'CdnType',
        'cname' => 'Cname',
        'coverage' => 'Coverage',
        'description' => 'Description',
        'domainId' => 'DomainId',
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'resourceGroupId' => 'ResourceGroupId',
        'sandbox' => 'Sandbox',
        'sources' => 'Sources',
        'sslProtocol' => 'SslProtocol',
    ];

    public function validate()
    {
        if (null !== $this->sources) {
            $this->sources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
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

        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }

        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toArray($noStream) : $this->sources;
        }

        if (null !== $this->sslProtocol) {
            $res['SslProtocol'] = $this->sslProtocol;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
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

        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }

        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        if (isset($map['SslProtocol'])) {
            $model->sslProtocol = $map['SslProtocol'];
        }

        return $model;
    }
}
