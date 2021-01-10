<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $liveDomainType;

    /**
     * @var string
     */
    public $liveDomainStatus;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'gmtCreated'       => 'GmtCreated',
        'liveDomainType'   => 'LiveDomainType',
        'liveDomainStatus' => 'LiveDomainStatus',
        'regionName'       => 'RegionName',
        'description'      => 'Description',
        'cname'            => 'Cname',
        'gmtModified'      => 'GmtModified',
        'domainName'       => 'DomainName',
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
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->liveDomainStatus) {
            $res['LiveDomainStatus'] = $this->liveDomainStatus;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['LiveDomainStatus'])) {
            $model->liveDomainStatus = $map['LiveDomainStatus'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
