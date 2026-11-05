<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListAppShrinkRequest extends Model
{
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
    public $appType;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizTypeListShrink;

    /**
     * @var string
     */
    public $originAppType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $productTypeListShrink;

    /**
     * @var string
     */
    public $subAppType;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'bizType' => 'BizType',
        'bizTypeListShrink' => 'BizTypeList',
        'originAppType' => 'OriginAppType',
        'osType' => 'OsType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'productTypeListShrink' => 'ProductTypeList',
        'subAppType' => 'SubAppType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->bizTypeListShrink) {
            $res['BizTypeList'] = $this->bizTypeListShrink;
        }

        if (null !== $this->originAppType) {
            $res['OriginAppType'] = $this->originAppType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->productTypeListShrink) {
            $res['ProductTypeList'] = $this->productTypeListShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BizTypeList'])) {
            $model->bizTypeListShrink = $map['BizTypeList'];
        }

        if (isset($map['OriginAppType'])) {
            $model->originAppType = $map['OriginAppType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProductTypeList'])) {
            $model->productTypeListShrink = $map['ProductTypeList'];
        }

        if (isset($map['SubAppType'])) {
            $model->subAppType = $map['SubAppType'];
        }

        return $model;
    }
}
