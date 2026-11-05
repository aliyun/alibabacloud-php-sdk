<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListAppRequest extends Model
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
     * @var int[]
     */
    public $bizTypeList;

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
     * @var string[]
     */
    public $productTypeList;

    /**
     * @var string
     */
    public $subAppType;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'bizType' => 'BizType',
        'bizTypeList' => 'BizTypeList',
        'originAppType' => 'OriginAppType',
        'osType' => 'OsType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'productTypeList' => 'ProductTypeList',
        'subAppType' => 'SubAppType',
    ];

    public function validate()
    {
        if (\is_array($this->bizTypeList)) {
            Model::validateArray($this->bizTypeList);
        }
        if (\is_array($this->productTypeList)) {
            Model::validateArray($this->productTypeList);
        }
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

        if (null !== $this->bizTypeList) {
            if (\is_array($this->bizTypeList)) {
                $res['BizTypeList'] = [];
                $n1 = 0;
                foreach ($this->bizTypeList as $item1) {
                    $res['BizTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->productTypeList) {
            if (\is_array($this->productTypeList)) {
                $res['ProductTypeList'] = [];
                $n1 = 0;
                foreach ($this->productTypeList as $item1) {
                    $res['ProductTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = [];
                $n1 = 0;
                foreach ($map['BizTypeList'] as $item1) {
                    $model->bizTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ProductTypeList'])) {
                $model->productTypeList = [];
                $n1 = 0;
                foreach ($map['ProductTypeList'] as $item1) {
                    $model->productTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubAppType'])) {
            $model->subAppType = $map['SubAppType'];
        }

        return $model;
    }
}
