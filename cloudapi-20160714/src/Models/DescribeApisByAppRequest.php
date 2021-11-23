<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisByAppRequest extends Model
{
    /**
     * @description API名称
     *
     * @var string
     */
    public $apiName;

    /**
     * @description API的ID
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description APP的ID
     *
     * @var int
     */
    public $appId;

    /**
     * @description API的请求HTTP Method
     *
     * @var string
     */
    public $method;

    /**
     * @description 当前页码
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页条目
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description API请求路径
     *
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiName'       => 'ApiName',
        'apiUid'        => 'ApiUid',
        'appId'         => 'AppId',
        'method'        => 'Method',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'path'          => 'Path',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisByAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
