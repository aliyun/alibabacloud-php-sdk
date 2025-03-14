<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulListRequest extends Model
{
    /**
     * @description The name of the vulnerability.
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The additional type of the vulnerabilities. You need to specify this parameter when you query application vulnerabilities. Set the value to **sca**. If you set **Type** to **app**, you must specify this parameter.
     *
     * > If you set this parameter to **sca**, application vulnerabilities and the vulnerabilities that are detected based on software component analysis are queried. If you do not specify this parameter, only application vulnerabilities are queried.
     *
     * @example sca
     *
     * @var string
     */
    public $attachTypes;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the vulnerabilities are fixed. Valid values:
     *
     *   **y**: yes
     *   **n**: no
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The ID of the asset group.
     *
     * > You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of asset groups.
     *
     * @example 9207613
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The IDs of vulnerabilities. You can specify up to 50 IDs. Separate multiple IDs with commas (,).
     *
     * @example 282,281,283
     *
     * @var string
     */
    public $ids;

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
     * @description The alias of the vulnerability.
     *
     * @example oval:com.redhat.rhsa:def:20172836
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority to fix the vulnerability. Separate multiple priorities with commas (,). Valid values:
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
     * @description The pagination token that is used in the next request to retrieve a new page of results. You must specify the token that is obtained from the previous query as the value of NextToken. You do not need to specify this parameter for the first request.
     *
     * @example E17B501887A2D3AA5E8360A6EFA3B***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page. Default value: **10**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The remarks for the asset affected by the vulnerability. The value can be the private IP address, public IP address, or name of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the IDs.
     *
     * @example 1232428423234****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The status of the vulnerability. Separate multiple statuses with commas (,). Valid values:
     *
     * - 1: unfixed
     * - 2: fix failed
     * - 3: rollback failed
     * - 4: being fixed
     * - 5: being rolled back
     * - 6: being verified
     * - 7: fixed
     * - 8: fixed and to be restarted
     * - 9: rolled back
     * - 10: ignored
     * - 11: rolled back and to be restarted
     * - 12: not found
     * - 20: expired
     *
     * @example 1,2,3
     *
     * @var string
     */
    public $statusList;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability.
     *   **app**: application vulnerability that is detected by using web scanner
     *   **emg**: urgent vulnerability.
     *   **sca**: application vulnerability that is detected by using software component analysis
     *
     * This parameter is required.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies whether to use NextToken to query the data of vulnerabilities. If you set UseNextToken to true, the value of TotalCount is not returned. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $useNextToken;

    /**
     * @description The UUIDs of the servers on which you want to query the vulnerabilities. Separate multiple UUIDs with commas (,).
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to obtain the UUIDs.
     *
     * @example 1587bedb-fdb4-48c4-9330-****
     *
     * @var string
     */
    public $uuids;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the vulnerabilities are detected. Separate multiple IDs with commas (,).
     *
     * @example ins-133****,ins-5414****
     *
     * @var string
     */
    public $vpcInstanceIds;
    protected $_name = [
        'aliasName' => 'AliasName',
        'attachTypes' => 'AttachTypes',
        'currentPage' => 'CurrentPage',
        'dealed' => 'Dealed',
        'groupId' => 'GroupId',
        'ids' => 'Ids',
        'lang' => 'Lang',
        'name' => 'Name',
        'necessity' => 'Necessity',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'remark' => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'statusList' => 'StatusList',
        'type' => 'Type',
        'useNextToken' => 'UseNextToken',
        'uuids' => 'Uuids',
        'vpcInstanceIds' => 'VpcInstanceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
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
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useNextToken) {
            $res['UseNextToken'] = $this->useNextToken;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
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
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseNextToken'])) {
            $model->useNextToken = $map['UseNextToken'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }
        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }

        return $model;
    }
}
