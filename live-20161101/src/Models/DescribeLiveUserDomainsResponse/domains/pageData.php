<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponse\domains;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $liveDomainType;

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
    public $description;

    /**
     * @var string
     */
    public $liveDomainStatus;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'domainName'       => 'DomainName',
        'cname'            => 'Cname',
        'liveDomainType'   => 'LiveDomainType',
        'gmtCreated'       => 'GmtCreated',
        'gmtModified'      => 'GmtModified',
        'description'      => 'Description',
        'liveDomainStatus' => 'LiveDomainStatus',
        'regionName'       => 'RegionName',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('liveDomainType', $this->liveDomainType, true);
        Model::validateRequired('gmtCreated', $this->gmtCreated, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('liveDomainStatus', $this->liveDomainStatus, true);
        Model::validateRequired('regionName', $this->regionName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->liveDomainStatus) {
            $res['LiveDomainStatus'] = $this->liveDomainStatus;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LiveDomainStatus'])) {
            $model->liveDomainStatus = $map['LiveDomainStatus'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
