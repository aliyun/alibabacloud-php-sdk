<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups;
use AlibabaCloud\Tea\Model;

class DescribeConfigIndexResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configGroups
     */
    public $configGroups;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'configGroups' => 'ConfigGroups',
        'code'         => 'Code',
        'stackName'    => 'StackName',
        'stackId'      => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configGroups) {
            $res['ConfigGroups'] = null !== $this->configGroups ? $this->configGroups->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigGroups'])) {
            $model->configGroups = configGroups::fromMap($map['ConfigGroups']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
