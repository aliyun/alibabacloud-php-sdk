<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventsRequest extends Model
{
    /**
     * @description The ID of the alert event.
     *
     * > To query the details of an alert event, you must specify the ID of the alert event. You can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to query the IDs of alert events.
     * @example 8df914418f4211fb****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description The types of the assets.
     *
     * @var string[]
     */
    public $assetsTypeList;

    /**
     * @description The ID of the cluster of whose alert events you want to query.
     *
     * @example c4af4fdf38a98496a9b63c2be5dae****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The key of the condition that is used to query alert events on containers. Valid values:
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
     * @example instanceId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the condition that is used to query alert events on containers.
     *
     * @example ccf9769c22b844ff9b8d57417683b****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description Specifies whether the alert event is handled. Valid values:
     *
     *   **N**: unhandled
     *   **Y**: handled
     *
     * @example N
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The subtype of the alert event. Separate multiple subtypes with commas (,).
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $eventNames;

    /**
     * @description The data source of the alert event. Set the value to sas.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the asset group to which the affected asset belongs.
     *
     * @example 18768
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the alert event.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

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
     * @description The severity of the alert event. Separate multiple severities with commas (,). Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $levels;

    /**
     * @description The name of the asset that is affected by the alert event.
     *
     * @example ecs-xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description An array that consists of the handling result codes of alert events.
     *
     * @var string[]
     */
    public $operateErrorCodeList;

    /**
     * @description The timestamp when the handling operation ends.
     *
     * @example 2022-07-06 13:50:38
     *
     * @var string
     */
    public $operateTimeEnd;

    /**
     * @description The timestamp when the handling operation starts.
     *
     * @example 2022-07-05 13:50:38
     *
     * @var string
     */
    public $operateTimeStart;

    /**
     * @description The number of entries per page. Default value: **20**. Maximum value: 100.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The alert type of the alert event. Valid values:
     *
     *   **Suspicious process**
     *   **Webshell**
     *   **Unusual logon**
     *   **Exception**
     *   **Sensitive file tampering**
     *   **Malicious process (cloud threat detection)**
     *   **Suspicious network connection**
     *   **Suspicious account**
     *   **Application intrusion event**
     *   **Cloud threat detection**
     *   **Precise defense**
     *   **Application whitelist**
     *   **Persistent webshell**
     *   **Web application threat detection**
     *   **Malicious script**
     *   **Threat intelligence**
     *   **Malicious network activity**
     *   **Cluster exception**
     *   **Webshell (on-premises threat detection)**
     *   **Vulnerability exploitation**
     *   **Malicious process (on-premises threat detection)**
     *   **Trusted exception**
     *   **Operations to manage other resources**
     *
     * @example Webshell
     *
     * @var string
     */
    public $parentEventTypes;

    /**
     * @description The name of the alert or the information about the asset.
     *
     * >  Fuzzy search is supported. The asset information includes the name, public IP address, and private IP address of an asset.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to query the ID.
     * @example 16670360956*****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The custom sorting field. Default value: **operateTime**. Valid values:
     *
     *   **lastTime**: the latest occurrence time.
     *   **operateTime**: the handling time.
     *
     * >  This parameter takes effect if you set the **Dealed** parameter to Y.
     * @example operateTime
     *
     * @var string
     */
    public $sortColumn;

    /**
     * @description The custom sorting order. Default value: **desc**. Valid values:
     *
     *   **asc**: the ascending order
     *   **desc**: the descending order
     *
     * >  This parameter takes effect if you set the **Dealed** parameter to Y.
     * @example desc
     *
     * @var string
     */
    public $sortType;

    /**
     * @description The source of the alert.
     *
     * @example aegis_suspicious_file_v2
     *
     * @var string
     */
    public $source;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   **0**: all
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *   **8**: marked as a false positive
     *   **16**: handling
     *   **32**: handled
     *   **64**: expired
     *   **128**: deleted
     *   **512**: automatically blocking
     *   **513**: automatically blocked
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The tactic ID of ATT\\&CK.
     *
     * @example TA0001
     *
     * @var string
     */
    public $tacticId;

    /**
     * @description The item that is used to search for the container. Valid values:
     *
     *   **containerId**: the ID of the container
     *   **uuid**: the UUID of the server
     *   **imageUuid**: the UUID of the image
     *
     * @example containerId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The end time when the alert event was last detected.
     *
     * @example 2022-07-06 13:50:38
     *
     * @var string
     */
    public $timeEnd;

    /**
     * @description The start time when the alert event was last detected.
     *
     * @example 2022-07-05 13:50:38
     *
     * @var string
     */
    public $timeStart;

    /**
     * @description The unique key of the alert.
     *
     * @example 73fc06fb175a7405697e402f52864****
     *
     * @var string
     */
    public $uniqueInfo;

    /**
     * @description The UUID of the server on which the alert is detected. Separate multiple UUIDs with commas (,).
     *
     * @example bb5d2484-f10e-450d-8917-3e79667e****,0e7c2fcd-7100-42c7-a21a-db6e4f32****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'alarmUniqueInfo'            => 'AlarmUniqueInfo',
        'assetsTypeList'             => 'AssetsTypeList',
        'clusterId'                  => 'ClusterId',
        'containerFieldName'         => 'ContainerFieldName',
        'containerFieldValue'        => 'ContainerFieldValue',
        'currentPage'                => 'CurrentPage',
        'dealed'                     => 'Dealed',
        'eventNames'                 => 'EventNames',
        'from'                       => 'From',
        'groupId'                    => 'GroupId',
        'id'                         => 'Id',
        'lang'                       => 'Lang',
        'levels'                     => 'Levels',
        'name'                       => 'Name',
        'operateErrorCodeList'       => 'OperateErrorCodeList',
        'operateTimeEnd'             => 'OperateTimeEnd',
        'operateTimeStart'           => 'OperateTimeStart',
        'pageSize'                   => 'PageSize',
        'parentEventTypes'           => 'ParentEventTypes',
        'remark'                     => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'sortColumn'                 => 'SortColumn',
        'sortType'                   => 'SortType',
        'source'                     => 'Source',
        'sourceIp'                   => 'SourceIp',
        'status'                     => 'Status',
        'tacticId'                   => 'TacticId',
        'targetType'                 => 'TargetType',
        'timeEnd'                    => 'TimeEnd',
        'timeStart'                  => 'TimeStart',
        'uniqueInfo'                 => 'UniqueInfo',
        'uuids'                      => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->assetsTypeList) {
            $res['AssetsTypeList'] = $this->assetsTypeList;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->eventNames) {
            $res['EventNames'] = $this->eventNames;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operateErrorCodeList) {
            $res['OperateErrorCodeList'] = $this->operateErrorCodeList;
        }
        if (null !== $this->operateTimeEnd) {
            $res['OperateTimeEnd'] = $this->operateTimeEnd;
        }
        if (null !== $this->operateTimeStart) {
            $res['OperateTimeStart'] = $this->operateTimeStart;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentEventTypes) {
            $res['ParentEventTypes'] = $this->parentEventTypes;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->sortColumn) {
            $res['SortColumn'] = $this->sortColumn;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['AssetsTypeList'])) {
            if (!empty($map['AssetsTypeList'])) {
                $model->assetsTypeList = $map['AssetsTypeList'];
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['EventNames'])) {
            $model->eventNames = $map['EventNames'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperateErrorCodeList'])) {
            if (!empty($map['OperateErrorCodeList'])) {
                $model->operateErrorCodeList = $map['OperateErrorCodeList'];
            }
        }
        if (isset($map['OperateTimeEnd'])) {
            $model->operateTimeEnd = $map['OperateTimeEnd'];
        }
        if (isset($map['OperateTimeStart'])) {
            $model->operateTimeStart = $map['OperateTimeStart'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentEventTypes'])) {
            $model->parentEventTypes = $map['ParentEventTypes'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['SortColumn'])) {
            $model->sortColumn = $map['SortColumn'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
