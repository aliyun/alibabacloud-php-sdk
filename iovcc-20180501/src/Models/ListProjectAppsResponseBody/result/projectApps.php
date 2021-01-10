<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsResponseBody\result;

use AlibabaCloud\Tea\Model;

class projectApps extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $appPkgName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $osType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'      => 'Status',
        'projectId'   => 'ProjectId',
        'userId'      => 'UserId',
        'gmtModified' => 'GmtModified',
        'appPkgName'  => 'AppPkgName',
        'appName'     => 'AppName',
        'appSecret'   => 'AppSecret',
        'appKey'      => 'AppKey',
        'appId'       => 'AppId',
        'osType'      => 'OsType',
        'gmtCreate'   => 'GmtCreate',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->appPkgName) {
            $res['AppPkgName'] = $this->appPkgName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['AppPkgName'])) {
            $model->appPkgName = $map['AppPkgName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
