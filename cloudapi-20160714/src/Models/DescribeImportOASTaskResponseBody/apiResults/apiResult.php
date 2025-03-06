<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\apiResults;

use AlibabaCloud\Tea\Model;

class apiResult extends Model
{
    /**
     * @description The API ID.
     *
     * @example c5a0c2900ff746b789c007545be22fb8
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The API name.
     *
     * @example GetByCreatorIdUsingGET
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The API description.
     *
     * @example release data api 411055691505041
     *
     * @var string
     */
    public $description;

    /**
     * @description The cause of the failure if the API fails to be imported.
     *
     * @example Internal Error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The API group ID.
     *
     * @example 736508d885074167ba8fbce3bc95ea0b
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The HTTP request HTTP method of the API.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The request path of the API.
     *
     * @example /creator/getByCreatorId
     *
     * @var string
     */
    public $path;

    /**
     * @description The execution status of the subtask. Valid values:
     *
     *   RUNNING
     *   WAIT
     *   OVER
     *   FAIL
     *   CANCEL
     *
     * @example WAIT
     *
     * @var string
     */
    public $updateStatus;
    protected $_name = [
        'apiId'        => 'ApiId',
        'apiName'      => 'ApiName',
        'description'  => 'Description',
        'errorMessage' => 'ErrorMessage',
        'groupId'      => 'GroupId',
        'method'       => 'Method',
        'path'         => 'Path',
        'updateStatus' => 'UpdateStatus',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->updateStatus) {
            $res['UpdateStatus'] = $this->updateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiResult
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['UpdateStatus'])) {
            $model->updateStatus = $map['UpdateStatus'];
        }

        return $model;
    }
}
