<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportSuspEventsRequest extends Model
{
    /**
     * @description The types of assets.
     *
     * @var string[]
     */
    public $assetsTypeList;

    /**
     * @description The ID of the cluster that you want to query.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
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
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the condition that is used to query alert events on containers.
     *
     * @example c819391d2d520485fa3e81e2dc2ea****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   **N**: unhandled
     *   **Y**: handled
     *
     * @example Y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The data source of the exception. Set the value to sas.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
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
     * @example serious,suspicious,remind
     *
     * @var string
     */
    public $levels;

    /**
     * @description The complete name of the exception.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $operateErrorCodeList;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
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
     *   **Others**
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $parentEventTypes;

    /**
     * @description The remarks.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description The source IP address of the request. The value of this parameter is specified by the system.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The handling status of the exception. Valid values:
     *
     *   **0**: all status
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *   **8**: marked as false positive
     *   **16**: handling
     *   **32**: handled
     *   **64**: expired
     *   **128**: deleted
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description The dimension from which you want to configure the feature. Valid values:
     *
     *   **uuid**: the UUID of the asset
     *   **image_repo**: the ID of the image repository
     *   **Cluster**: the ID of the cluster
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The end of the time range during which the exception is detected.
     *
     * @example 2022-12-05 00:00:00
     *
     * @var string
     */
    public $timeEnd;

    /**
     * @description The beginning of the time range during which the exception is detected.
     *
     * @example 2022-10-01 00:00:00
     *
     * @var string
     */
    public $timeStart;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'assetsTypeList'       => 'AssetsTypeList',
        'clusterId'            => 'ClusterId',
        'containerFieldName'   => 'ContainerFieldName',
        'containerFieldValue'  => 'ContainerFieldValue',
        'currentPage'          => 'CurrentPage',
        'dealed'               => 'Dealed',
        'from'                 => 'From',
        'id'                   => 'Id',
        'lang'                 => 'Lang',
        'levels'               => 'Levels',
        'name'                 => 'Name',
        'operateErrorCodeList' => 'OperateErrorCodeList',
        'pageSize'             => 'PageSize',
        'parentEventTypes'     => 'ParentEventTypes',
        'remark'               => 'Remark',
        'sourceIp'             => 'SourceIp',
        'status'               => 'Status',
        'targetType'           => 'TargetType',
        'timeEnd'              => 'TimeEnd',
        'timeStart'            => 'TimeStart',
        'uniqueInfo'           => 'UniqueInfo',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentEventTypes) {
            $res['ParentEventTypes'] = $this->parentEventTypes;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportSuspEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentEventTypes'])) {
            $model->parentEventTypes = $map['ParentEventTypes'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
