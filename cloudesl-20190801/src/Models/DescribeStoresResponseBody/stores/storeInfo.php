<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeStoresResponseBody\stores;

use AlibabaCloud\Tea\Model;

class storeInfo extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $companyId;

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
    public $groups;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $storeName;
    protected $_name = [
        'brand'       => 'Brand',
        'comments'    => 'Comments',
        'companyId'   => 'CompanyId',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groups'      => 'Groups',
        'level'       => 'Level',
        'outId'       => 'OutId',
        'parentId'    => 'ParentId',
        'phone'       => 'Phone',
        'storeId'     => 'StoreId',
        'storeName'   => 'StoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Groups'])) {
            $model->groups = $map['Groups'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }

        return $model;
    }
}
