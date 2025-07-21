<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description Address type, sending address: 1; random address: 0;
     *
     * @example 0
     *
     * @var string
     */
    public $addressType;

    /**
     * @description Creation time
     *
     * @example 2022-04-18T10:36Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description dedicated IP pool ID.
     *
     * @example xxx
     *
     * @var string
     */
    public $ipPoolId;

    /**
     * @description dedicated IP pool name.
     *
     * @example test
     *
     * @var string
     */
    public $ipPoolName;

    /**
     * @description Receiver\\"s name
     *
     * @example TKP000442-333
     *
     * @var string
     */
    public $receiversName;

    /**
     * @description Request count
     *
     * @example 1
     *
     * @var string
     */
    public $requestCount;

    /**
     * @description Tag
     *
     * @example 202201
     *
     * @var string
     */
    public $tagName;

    /**
     * @description Task ID
     *
     * @example 1054296
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Task status, sent successfully: 1
     *
     * @example 1
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description Template name
     *
     * @example Short Simple
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Creation time in UTC format
     *
     * @example 1569734892
     *
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'addressType' => 'AddressType',
        'createTime' => 'CreateTime',
        'ipPoolId' => 'IpPoolId',
        'ipPoolName' => 'IpPoolName',
        'receiversName' => 'ReceiversName',
        'requestCount' => 'RequestCount',
        'tagName' => 'TagName',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'templateName' => 'TemplateName',
        'utcCreateTime' => 'UtcCreateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ipPoolId) {
            $res['IpPoolId'] = $this->ipPoolId;
        }
        if (null !== $this->ipPoolName) {
            $res['IpPoolName'] = $this->ipPoolName;
        }
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IpPoolId'])) {
            $model->ipPoolId = $map['IpPoolId'];
        }
        if (isset($map['IpPoolName'])) {
            $model->ipPoolName = $map['IpPoolName'];
        }
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }

        return $model;
    }
}
