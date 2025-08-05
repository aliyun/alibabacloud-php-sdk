<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponseBody\data;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ipPoolId;

    /**
     * @var string
     */
    public $ipPoolName;

    /**
     * @var string
     */
    public $receiversName;

    /**
     * @var string
     */
    public $requestCount;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $templateName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
