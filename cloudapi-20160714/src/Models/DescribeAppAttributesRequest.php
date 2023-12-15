<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeAppAttributesRequest extends Model
{
    /**
     * @description The AppCode of the app.
     *
     * @example 23552160
     *
     * @var string
     */
    public $appCode;

    /**
     * @description The ID of the app.
     *
     * @example 20112314518278
     *
     * @var int
     */
    public $appId;

    /**
     * @description The app key that is used to make an API call.
     *
     * @example 203708622
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The name of the app.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description Specifies whether to enable tag verification.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTagAuth;

    /**
     * @description The extended information.
     *
     * @example 110243810311
     *
     * @var string
     */
    public $extend;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The order. Valid values: asc and desc. Default value: desc.
     *
     *   asc: The apps are displayed in ascending order of modification time.
     *   desc: The apps are displayed in descending order of modification time.
     *
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @description The tag of objects that match the rule. You can specify multiple tags.
     *
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'appCode'       => 'AppCode',
        'appId'         => 'AppId',
        'appKey'        => 'AppKey',
        'appName'       => 'AppName',
        'enableTagAuth' => 'EnableTagAuth',
        'extend'        => 'Extend',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'securityToken' => 'SecurityToken',
        'sort'          => 'Sort',
        'tag'           => 'Tag',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->enableTagAuth) {
            $res['EnableTagAuth'] = $this->enableTagAuth;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['EnableTagAuth'])) {
            $model->enableTagAuth = $map['EnableTagAuth'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
