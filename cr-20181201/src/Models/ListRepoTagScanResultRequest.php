<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListRepoTagScanResultRequest extends Model
{
    /**
     * @description The digest of the image.
     *
     * @example sha256:6b0b094f8a904f8fb6602427aed0d1fa
     *
     * @var string
     */
    public $digest;

    /**
     * @description The parameter whose value that you want to query. Fox example, if the value is `FixCmd`, only the `FixCmd` parameter is returned.
     *
     * @example FixCmd
     *
     * @var string
     */
    public $filterValue;

    /**
     * @description The ID of the instance.
     *
     * @example cri-2j88dtld8yel****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-uf082u9dg8do****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the security scan task.
     *
     * @example 6b0b094f-8a90-4f8f-b660-2427aed0****
     *
     * @var string
     */
    public $scanTaskId;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   `cve`: image system vulnerability
     *   `sca`: image application vulnerability
     *
     * @example sca
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The severity of the vulnerability. Valid values:
     *
     *   `High`
     *   `Medium`
     *   `Low`
     *   `Unknown`
     *
     * @example High
     *
     * @var string
     */
    public $severity;

    /**
     * @description The name of the image tag.
     *
     * @example 1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The keyword for fuzzy search used in scanning. The value can be a CVE name.
     *
     * @example CVE-2021
     *
     * @var string
     */
    public $vulQueryKey;
    protected $_name = [
        'digest'      => 'Digest',
        'filterValue' => 'FilterValue',
        'instanceId'  => 'InstanceId',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'repoId'      => 'RepoId',
        'scanTaskId'  => 'ScanTaskId',
        'scanType'    => 'ScanType',
        'severity'    => 'Severity',
        'tag'         => 'Tag',
        'vulQueryKey' => 'VulQueryKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->vulQueryKey) {
            $res['VulQueryKey'] = $this->vulQueryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoTagScanResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['VulQueryKey'])) {
            $model->vulQueryKey = $map['VulQueryKey'];
        }

        return $model;
    }
}
