<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniTasksResponseBody\listMiniTaskResult;

use AlibabaCloud\Tea\Model;

class miniTaskList extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $greyConfigInfo;

    /**
     * @var string
     */
    public $greyEndtime;

    /**
     * @var string
     */
    public $greyEndtimeData;

    /**
     * @var int
     */
    public $greyNum;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $packageId;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var int
     */
    public $publishMode;

    /**
     * @var int
     */
    public $publishType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $whitelistIds;
    protected $_name = [
        'appCode'         => 'AppCode',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'greyConfigInfo'  => 'GreyConfigInfo',
        'greyEndtime'     => 'GreyEndtime',
        'greyEndtimeData' => 'GreyEndtimeData',
        'greyNum'         => 'GreyNum',
        'id'              => 'Id',
        'memo'            => 'Memo',
        'packageId'       => 'PackageId',
        'platform'        => 'Platform',
        'productVersion'  => 'ProductVersion',
        'publishMode'     => 'PublishMode',
        'publishType'     => 'PublishType',
        'status'          => 'Status',
        'taskStatus'      => 'TaskStatus',
        'whitelistIds'    => 'WhitelistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->greyConfigInfo) {
            $res['GreyConfigInfo'] = $this->greyConfigInfo;
        }
        if (null !== $this->greyEndtime) {
            $res['GreyEndtime'] = $this->greyEndtime;
        }
        if (null !== $this->greyEndtimeData) {
            $res['GreyEndtimeData'] = $this->greyEndtimeData;
        }
        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->publishMode) {
            $res['PublishMode'] = $this->publishMode;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->whitelistIds) {
            $res['WhitelistIds'] = $this->whitelistIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return miniTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GreyConfigInfo'])) {
            $model->greyConfigInfo = $map['GreyConfigInfo'];
        }
        if (isset($map['GreyEndtime'])) {
            $model->greyEndtime = $map['GreyEndtime'];
        }
        if (isset($map['GreyEndtimeData'])) {
            $model->greyEndtimeData = $map['GreyEndtimeData'];
        }
        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['PublishMode'])) {
            $model->publishMode = $map['PublishMode'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['WhitelistIds'])) {
            $model->whitelistIds = $map['WhitelistIds'];
        }

        return $model;
    }
}
