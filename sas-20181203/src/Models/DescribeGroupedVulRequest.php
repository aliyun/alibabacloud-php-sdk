<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedVulRequest extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The type of the asset on which the vulnerability is detected. Separate multiple types with commas (,). Valid values:
     *
     *   **ECS**: Elastic Compute Service (ECS) instance
     *   **CONTAINER**: container
     *
     * @example ECS,CONTAINER
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The type of the vulnerability. This parameter is valid only for application vulnerabilities. Separate multiple values with commas (,). Valid values:
     *
     *   **sca**: vulnerability that is detected based on software component analysis
     *   **app**: application vulnerability
     *
     * @example sca
     *
     * @var string
     */
    public $attachTypes;

    /**
     * @description The key of the condition that is used to query containers. Valid values:
     *
     *   **instanceId**: the ID of the asset
     *   **appName**: the name of the application
     *   **clusterId**: the ID of the cluster
     *   **regionId**: the ID of the region
     *   **nodeName**: the name of the node
     *   **namespace**: the namespace
     *   **clusterName**: the name of the cluster
     *   **image**: the name of the image
     *   **imageRepoName**: the name of the image repository
     *   **imageRepoNamespace**: the namespace to which the image repository belongs
     *   **imageRepoTag**: the tag that is added to the image
     *   **imageDigest**: the digest of the image
     *
     * @example appName
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the vulnerability is handled. Valid values:
     *
     *   **y**: handled
     *   **n**: not handled
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The ID of the asset group.
     *
     * @example 235454
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The priorities to fix the vulnerabilities. Separate multiple priorities with commas (,). Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to query the account ID.
     * @example 127608589417****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The tag that is used to search for the vulnerability. Valid values:
     *
     *   **Restart required**
     *   **Remote utilization**
     *   **EXP exists**
     *   **Available**
     *   **Elevation of Privilege**
     *   **Code Execution**
     *
     * @example Code Execution
     *
     * @var string
     */
    public $searchTags;

    /**
     * @description The query type for containers. Valid values:
     *
     *   **containerId**: the ID of the container
     *   **uuid**: the ID of the asset
     *
     * @example containerId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the vulnerability that you want to query. Default value: cve. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability that is detected by network scanning
     *   **sca**: application vulnerability that is detected by software component analysis
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server. Separate multiple UUIDs with commas (,).
     *
     * @example d42f938c-d962-48a0-90f9-05e4ea****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliasName'                  => 'AliasName',
        'assetType'                  => 'AssetType',
        'attachTypes'                => 'AttachTypes',
        'containerFieldName'         => 'ContainerFieldName',
        'currentPage'                => 'CurrentPage',
        'dealed'                     => 'Dealed',
        'groupId'                    => 'GroupId',
        'lang'                       => 'Lang',
        'necessity'                  => 'Necessity',
        'pageSize'                   => 'PageSize',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'searchTags'                 => 'SearchTags',
        'targetType'                 => 'TargetType',
        'type'                       => 'Type',
        'uuids'                      => 'Uuids',
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
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
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
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
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
