<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulItemPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Vulnerability alias.
     *
     * @example RHSA-2024:4620: libndp 安全更新
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description Number of high-priority vulnerabilities to be fixed.
     *
     * @example 74
     *
     * @var int
     */
    public $asapCount;

    /**
     * @description User ID.
     *
     * @example 1940494487193744
     *
     * @var string
     */
    public $customerId;

    /**
     * @description Prefix for the CVE remediation advice URL.
     *
     * @example https://avd.aliyun.com/detail/
     *
     * @var string
     */
    public $cveUrlPrefix;

    /**
     * @description Processing status.
     *
     * @example y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description Timestamp of the last discovery of the vulnerability.
     *
     * @example 2023-04-23 14:47:34
     *
     * @var string
     */
    public $findTime;

    /**
     * @description Number of processed vulnerabilities.
     *
     * @example 20
     *
     * @var int
     */
    public $handledCount;

    /**
     * @description Primary key ID.
     *
     * @example 353845
     *
     * @var int
     */
    public $id;

    /**
     * @description Number of medium-priority vulnerabilities to be fixed.
     *
     * @example 10
     *
     * @var int
     */
    public $laterCount;

    /**
     * @description Risk level
     *
     * @example later
     *
     * @var string
     */
    public $level;

    /**
     * @description Vulnerability name.
     *
     * @example oval:com.redhat.rhsa:def:20205002
     *
     * @var string
     */
    public $name;

    /**
     * @description Number of low-priority vulnerabilities to be fixed.
     *
     * @example 8
     *
     * @var int
     */
    public $nntfCount;

    /**
     * @description CVE number.
     *
     * @example CVE-2019-20907
     *
     * @var string
     */
    public $related;

    /**
     * @description Number of related CVE numbers.
     *
     * @example 20
     *
     * @var int
     */
    public $relatedCveCount;

    /**
     * @description Vulnerability type.
     *
     * @example sca
     *
     * @var string
     */
    public $scanType;

    /**
     * @description Tags.
     *
     * @example Elevation of Privilege
     *
     * @var string
     */
    public $tags;

    /**
     * @description Total number of fixed vulnerabilities.
     *
     * @example 50
     *
     * @var int
     */
    public $totalFixCount;
    protected $_name = [
        'aliasName'       => 'AliasName',
        'asapCount'       => 'AsapCount',
        'customerId'      => 'CustomerId',
        'cveUrlPrefix'    => 'CveUrlPrefix',
        'dealed'          => 'Dealed',
        'findTime'        => 'FindTime',
        'handledCount'    => 'HandledCount',
        'id'              => 'Id',
        'laterCount'      => 'LaterCount',
        'level'           => 'Level',
        'name'            => 'Name',
        'nntfCount'       => 'NntfCount',
        'related'         => 'Related',
        'relatedCveCount' => 'RelatedCveCount',
        'scanType'        => 'ScanType',
        'tags'            => 'Tags',
        'totalFixCount'   => 'TotalFixCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->cveUrlPrefix) {
            $res['CveUrlPrefix'] = $this->cveUrlPrefix;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->findTime) {
            $res['FindTime'] = $this->findTime;
        }
        if (null !== $this->handledCount) {
            $res['HandledCount'] = $this->handledCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->relatedCveCount) {
            $res['RelatedCveCount'] = $this->relatedCveCount;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->totalFixCount) {
            $res['TotalFixCount'] = $this->totalFixCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['CveUrlPrefix'])) {
            $model->cveUrlPrefix = $map['CveUrlPrefix'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['FindTime'])) {
            $model->findTime = $map['FindTime'];
        }
        if (isset($map['HandledCount'])) {
            $model->handledCount = $map['HandledCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['RelatedCveCount'])) {
            $model->relatedCveCount = $map['RelatedCveCount'];
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TotalFixCount'])) {
            $model->totalFixCount = $map['TotalFixCount'];
        }

        return $model;
    }
}
