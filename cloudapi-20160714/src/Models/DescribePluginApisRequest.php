<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribePluginApisRequest extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example c6b0dd188b0e4e408e12f926********
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example API
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The description of the API.
     *
     * @example API description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group.
     *
     * @example 231a4bb81ee94da785733c29********
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The request HTTP method of the API.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     * Default value:10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request path of the API.
     *
     * @example /sendVerifyCode
     *
     * @var string
     */
    public $path;

    /**
     * @description The ID of the gateway plug-in.
     *
     * This parameter is required.
     * @example bf6583efcef44c51adb00c4e********
     *
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'description'   => 'Description',
        'groupId'       => 'GroupId',
        'method'        => 'Method',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'path'          => 'Path',
        'pluginId'      => 'PluginId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePluginApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
