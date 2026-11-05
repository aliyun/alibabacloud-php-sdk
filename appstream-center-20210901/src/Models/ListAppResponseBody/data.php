<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appIconUrl;

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
    public $appThemeColor;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $executeFileAddress;

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
    public $originAppType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $silenceParam;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subAppType;
    protected $_name = [
        'aliUid' => 'AliUid',
        'appIconUrl' => 'AppIconUrl',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appThemeColor' => 'AppThemeColor',
        'appType' => 'AppType',
        'bizType' => 'BizType',
        'deletable' => 'Deletable',
        'executeFileAddress' => 'ExecuteFileAddress',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'originAppType' => 'OriginAppType',
        'osType' => 'OsType',
        'productType' => 'ProductType',
        'silenceParam' => 'SilenceParam',
        'status' => 'Status',
        'subAppType' => 'SubAppType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->appIconUrl) {
            $res['AppIconUrl'] = $this->appIconUrl;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appThemeColor) {
            $res['AppThemeColor'] = $this->appThemeColor;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        if (null !== $this->executeFileAddress) {
            $res['ExecuteFileAddress'] = $this->executeFileAddress;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->originAppType) {
            $res['OriginAppType'] = $this->originAppType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->silenceParam) {
            $res['SilenceParam'] = $this->silenceParam;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAppType) {
            $res['SubAppType'] = $this->subAppType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AppIconUrl'])) {
            $model->appIconUrl = $map['AppIconUrl'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppThemeColor'])) {
            $model->appThemeColor = $map['AppThemeColor'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        if (isset($map['ExecuteFileAddress'])) {
            $model->executeFileAddress = $map['ExecuteFileAddress'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OriginAppType'])) {
            $model->originAppType = $map['OriginAppType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SilenceParam'])) {
            $model->silenceParam = $map['SilenceParam'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAppType'])) {
            $model->subAppType = $map['SubAppType'];
        }

        return $model;
    }
}
