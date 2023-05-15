<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedVulRequest extends Model
{
    /**
     * @description $.parameters[10].schema.example
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description Specifies whether the vulnerability is handled. Valid values:
     *
     **y**: handled **n**: The vulnerability is not handled.
     *
     * @example ECS,CONTAINER
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The priorities to fix the vulnerabilities. Separate multiple priorities with commas (,). Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * @example sca
     *
     * @var string
     */
    public $attachTypes;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *   **sca**: vulnerability that is detected based on software component analysis
     *
     * @example appName
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description $.parameters[11].schema.example
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description $.parameters[11].schema.description
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example 235454
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Code Execution
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description $.parameters[10].schema.enumValueTitles
     *
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @description $.parameters[11].schema.enumValueTitles
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The alias of the vulnerability.
     *
     * @example Code Execution
     *
     * @var string
     */
    public $searchTags;

    /**
     * @description The UUID of the server. Separate multiple UUIDs with commas (,).
     *
     * @example containerId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description Queries vulnerabilities by group.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description $.parameters[10].schema.description
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
