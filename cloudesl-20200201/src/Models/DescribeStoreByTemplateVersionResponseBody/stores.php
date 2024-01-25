<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreByTemplateVersionResponseBody;

use AlibabaCloud\Tea\Model;

class stores extends Model
{
    /**
     * @example 2020-03-06T02:58:16Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $level;

    /**
     * @example rm-2zeb2rt850x880j1n
     *
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @example s-nxwd8sutd6
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @example 1.1.0
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example GMT+08:00
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example s-2zeb2r1t12sq
     *
     * @var string
     */
    public $userStoreCode;
    protected $_name = [
        'gmtModified'     => 'GmtModified',
        'level'           => 'Level',
        'parentId'        => 'ParentId',
        'phone'           => 'Phone',
        'storeId'         => 'StoreId',
        'storeName'       => 'StoreName',
        'templateVersion' => 'TemplateVersion',
        'timeZone'        => 'TimeZone',
        'userStoreCode'   => 'UserStoreCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->userStoreCode) {
            $res['UserStoreCode'] = $this->userStoreCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stores
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['UserStoreCode'])) {
            $model->userStoreCode = $map['UserStoreCode'];
        }

        return $model;
    }
}
