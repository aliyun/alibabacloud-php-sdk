<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example image.developer.aliyundoc.com
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
     * @example example.aliyun.com
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
     * @example 2015-10-28T11:05:52Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2015-10-28T11:05:52Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example abcd1234abcd1234
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
     * @example normal
     *
     * @var string
     */
    public $sandbox;

    /**
     * @var sources
     */
    public $sources;
    protected $_name = [
        'cname'           => 'Cname',
        'description'     => 'Description',
        'domainName'      => 'DomainName',
        'domainStatus'    => 'DomainStatus',
        'gmtCreated'      => 'GmtCreated',
        'gmtModified'     => 'GmtModified',
        'resourceGroupId' => 'ResourceGroupId',
        'SSLProtocol'     => 'SSLProtocol',
        'sandbox'         => 'Sandbox',
        'sources'         => 'Sources',
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
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
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
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
