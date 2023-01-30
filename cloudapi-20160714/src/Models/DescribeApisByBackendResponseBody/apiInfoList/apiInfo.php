<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByBackendResponseBody\apiInfoList;

use AlibabaCloud\Tea\Model;

class apiInfo extends Model
{
    /**
     * @description The description of the API.
     *
     * @example 20bcdc9453524b78a8beb1f6de21edb7
     *
     * @var string
     */
    public $apiId;

    /**
     * @description auditing
     *
     * @example testApi
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The name of the API group.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The request path of the API.
     *
     * @example 15bcdc9453524b7gs8beb1f6de21edb7
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the API group.
     *
     * @example testApiGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the API.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The request method of the API.
     *
     * @example /test
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'apiId'       => 'ApiId',
        'apiName'     => 'ApiName',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'method'      => 'Method',
        'path'        => 'Path',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiInfo
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
