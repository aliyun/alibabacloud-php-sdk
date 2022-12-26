<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportSuspEventsRequest extends Model
{
    /**
     * @var string[]
     */
    public $assetsTypeList;

    /**
     * @example c4af4fdf38a98496a9b63c2be5dae****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @example c819391d2d520485fa3e81e2dc2ea****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @example Y
     *
     * @var string
     */
    public $dealed;

    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example serious,suspicious,remind
     *
     * @var string
     */
    public $levels;

    /**
     * @example WEBSHELL
     *
     * @var string
     */
    public $name;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example WEBSHELL
     *
     * @var string
     */
    public $parentEventTypes;

    /**
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 2022-12-05 00:00:00
     *
     * @var string
     */
    public $timeEnd;

    /**
     * @example 2022-10-01 00:00:00
     *
     * @var string
     */
    public $timeStart;
    protected $_name = [
        'assetsTypeList'      => 'AssetsTypeList',
        'clusterId'           => 'ClusterId',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage'         => 'CurrentPage',
        'dealed'              => 'Dealed',
        'from'                => 'From',
        'lang'                => 'Lang',
        'levels'              => 'Levels',
        'name'                => 'Name',
        'pageSize'            => 'PageSize',
        'parentEventTypes'    => 'ParentEventTypes',
        'remark'              => 'Remark',
        'sourceIp'            => 'SourceIp',
        'status'              => 'Status',
        'targetType'          => 'TargetType',
        'timeEnd'             => 'TimeEnd',
        'timeStart'           => 'TimeStart',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
