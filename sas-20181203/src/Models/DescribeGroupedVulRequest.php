<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedVulRequest extends Model
{
    /**
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @example ECS,CONTAINER
     *
     * @var string
     */
    public $assetType;

    /**
     * @example sca
     *
     * @var string
     */
    public $attachTypes;

    /**
     * @example appName
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @example 235454
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the vulnerability.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example Code Execution
     *
     * @var string
     */
    public $searchTags;

    /**
     * @example containerId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The total number of fixed vulnerabilities.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The number of vulnerabilities that have the **high** priority.
     *
     * @example d42f938c-d962-48a0-90f9-05e4ea****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliasName'          => 'AliasName',
        'assetType'          => 'AssetType',
        'attachTypes'        => 'AttachTypes',
        'containerFieldName' => 'ContainerFieldName',
        'currentPage'        => 'CurrentPage',
        'dealed'             => 'Dealed',
        'groupId'            => 'GroupId',
        'lang'               => 'Lang',
        'necessity'          => 'Necessity',
        'pageSize'           => 'PageSize',
        'searchTags'         => 'SearchTags',
        'targetType'         => 'TargetType',
        'type'               => 'Type',
        'uuids'              => 'Uuids',
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
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchTags) {
            $res['SearchTags'] = $this->searchTags;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedVulRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchTags'])) {
            $model->searchTags = $map['SearchTags'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
