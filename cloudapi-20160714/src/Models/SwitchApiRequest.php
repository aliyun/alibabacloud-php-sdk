<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SwitchApiRequest extends Model
{
    /**
     * @description The description of the switch operation.
     *
     * @example d6f679aeb3be4b91b3688e887ca1fe16
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The ID of the request.
     *
     * @example for_demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example 123
     *
     * @var string
     */
    public $groupId;

    /**
     * @description *   This API is intended for API providers.
     *   The historical version can be obtained through the DescribeHistoryApis API.****
     *   Only APIs that have been published more than once have historical versions to switch to.
     *   This operation can only be performed on running APIs. Use caution when performing this operation because the operation cannot be undone after it has been completed and takes effect within 5 seconds.
     *   The switch operation is in essence a publish operation, and the reason for this operation must be provided.
     *
     * @example 20160705104552292
     *
     * @var string
     */
    public $historyVersion;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The historical version you want to switch to.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'          => 'ApiId',
        'description'    => 'Description',
        'groupId'        => 'GroupId',
        'historyVersion' => 'HistoryVersion',
        'securityToken'  => 'SecurityToken',
        'stageName'      => 'StageName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
