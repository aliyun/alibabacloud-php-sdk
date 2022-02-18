<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneGroupRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 应用集合。以 "," 分割应用 id
     *
     * @var string
     */
    public $appIds;

    /**
     * @description 是否开启。
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 入口应用。格式 "来源系统:id"，比如 EDAS:UUID 或者 CSB:UUID
     *
     * @var string
     */
    public $entryApp;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description 主键ID。由SP生成(数据库自增主键)。
     *
     * @var int
     */
    public $id;

    /**
     * @description mse licenseKey
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @description 名称
     *
     * @var string
     */
    public $name;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description 来源。可选值为: EDAS。
     *
     * @var string
     */
    public $source;

    /**
     * @description 0 未生效
     *
     * @var int
     */
    public $status;

    /**
     * @description 阿里云账号。格式为数字，比如1362469756373809。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appIds'         => 'AppIds',
        'enable'         => 'Enable',
        'entryApp'       => 'EntryApp',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'licenseKey'     => 'LicenseKey',
        'name'           => 'Name',
        'region'         => 'Region',
        'source'         => 'Source',
        'status'         => 'Status',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
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
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
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
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
