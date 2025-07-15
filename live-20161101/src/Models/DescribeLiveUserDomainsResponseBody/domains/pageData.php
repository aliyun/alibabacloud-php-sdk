<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The CNAME generated for the domain name.
     *
     * @example learn.developer.aliyundoc.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time when the domain name was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-08-29T12:15:36Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the domain name was last modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-29T12:15:36Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **online**
     *   **offline**
     *   **configuring**
     *
     * @example online
     *
     * @var string
     */
    public $liveDomainStatus;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **liveVideo**: streaming domain
     *   **liveEdge**: ingest domain
     *
     * @example liveVideo
     *
     * @var string
     */
    public $liveDomainType;

    /**
     * @description The ID of the region in which the domain name resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzvyjetyjjmla
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cname' => 'Cname',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'liveDomainStatus' => 'LiveDomainStatus',
        'liveDomainType' => 'LiveDomainType',
        'regionName' => 'RegionName',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

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
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->liveDomainStatus) {
            $res['LiveDomainStatus'] = $this->liveDomainStatus;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LiveDomainStatus'])) {
            $model->liveDomainStatus = $map['LiveDomainStatus'];
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
