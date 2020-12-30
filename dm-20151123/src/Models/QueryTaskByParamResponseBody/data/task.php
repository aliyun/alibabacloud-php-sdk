<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $receiversName;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $requestCount;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var int
     */
    public $utcCreateTime;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'receiversName' => 'ReceiversName',
        'tagName'       => 'TagName',
        'taskStatus'    => 'TaskStatus',
        'createTime'    => 'CreateTime',
        'requestCount'  => 'RequestCount',
        'addressType'   => 'AddressType',
        'utcCreateTime' => 'UtcCreateTime',
        'templateName'  => 'TemplateName',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
