<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponseBody\queryMappCenterAppResult;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponseBody\queryMappCenterAppResult\mappCenterApp\androidConfig;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponseBody\queryMappCenterAppResult\mappCenterApp\iosConfig;
use AlibabaCloud\Tea\Model;

class mappCenterApp extends Model
{
    /**
     * @var androidConfig
     */
    public $androidConfig;

    /**
     * @var string
     */
    public $appDesc;

    /**
     * @var string
     */
    public $appIcon;

    /**
     * @var string
     */
    public $appId;

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
    public $creator;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var iosConfig
     */
    public $iosConfig;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $monitorJson;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'androidConfig' => 'AndroidConfig',
        'appDesc'       => 'AppDesc',
        'appIcon'       => 'AppIcon',
        'appId'         => 'AppId',
        'appName'       => 'AppName',
        'appSecret'     => 'AppSecret',
        'creator'       => 'Creator',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'iosConfig'     => 'IosConfig',
        'modifier'      => 'Modifier',
        'monitorJson'   => 'MonitorJson',
        'status'        => 'Status',
        'tenantId'      => 'TenantId',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidConfig) {
            $res['AndroidConfig'] = null !== $this->androidConfig ? $this->androidConfig->toMap() : null;
        }
        if (null !== $this->appDesc) {
            $res['AppDesc'] = $this->appDesc;
        }
        if (null !== $this->appIcon) {
            $res['AppIcon'] = $this->appIcon;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->iosConfig) {
            $res['IosConfig'] = null !== $this->iosConfig ? $this->iosConfig->toMap() : null;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->monitorJson) {
            $res['MonitorJson'] = $this->monitorJson;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mappCenterApp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidConfig'])) {
            $model->androidConfig = androidConfig::fromMap($map['AndroidConfig']);
        }
        if (isset($map['AppDesc'])) {
            $model->appDesc = $map['AppDesc'];
        }
        if (isset($map['AppIcon'])) {
            $model->appIcon = $map['AppIcon'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IosConfig'])) {
            $model->iosConfig = iosConfig::fromMap($map['IosConfig']);
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['MonitorJson'])) {
            $model->monitorJson = $map['MonitorJson'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
