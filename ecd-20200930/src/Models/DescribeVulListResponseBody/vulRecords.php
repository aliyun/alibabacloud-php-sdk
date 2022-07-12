<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var extendContentJson
     */
    public $extendContentJson;

    /**
     * @var int
     */
    public $firstTs;

    /**
     * @var int
     */
    public $lastTs;

    /**
     * @var int
     */
    public $modifyTs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $related;

    /**
     * @var int
     */
    public $repairTs;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMessage;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'         => 'AliasName',
        'desktopId'         => 'DesktopId',
        'desktopName'       => 'DesktopName',
        'extendContentJson' => 'ExtendContentJson',
        'firstTs'           => 'FirstTs',
        'lastTs'            => 'LastTs',
        'modifyTs'          => 'ModifyTs',
        'name'              => 'Name',
        'necessity'         => 'Necessity',
        'online'            => 'Online',
        'osVersion'         => 'OsVersion',
        'related'           => 'Related',
        'repairTs'          => 'RepairTs',
        'resultCode'        => 'ResultCode',
        'resultMessage'     => 'ResultMessage',
        'status'            => 'Status',
        'tag'               => 'Tag',
        'type'              => 'Type',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->extendContentJson) {
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toMap() : null;
        }
        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->modifyTs) {
            $res['ModifyTs'] = $this->modifyTs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->repairTs) {
            $res['RepairTs'] = $this->repairTs;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['ExtendContentJson'])) {
            $model->extendContentJson = extendContentJson::fromMap($map['ExtendContentJson']);
        }
        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['ModifyTs'])) {
            $model->modifyTs = $map['ModifyTs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['RepairTs'])) {
            $model->repairTs = $map['RepairTs'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
