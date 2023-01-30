<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisByAppRequest extends Model
{
    /**
     * @description The name of the API operation.
     *
     * @example getPersonInfo
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The ID of the API operation.
     *
     * @example b19240592b1b4e74961fb8438ed7550c
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The ID of the application.
     *
     * @example 333486644
     *
     * @var int
     */
    public $appId;

    /**
     * @description The description of the API.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The request HTTP method for the API.
     *
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The API request path.
     *
     * @example /tt
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
        'description'   => 'Description',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
