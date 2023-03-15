<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetStackPolicyRequest extends Model
{
    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The structure that contains the stack policy body. The stack policy body must be 1 to 16,384 bytes in length.
     *
     * You can specify one of the StackPolicyBody and StackPolicyURL parameters, but you cannot specify both of them.
     * @example {"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description The URL for the file that contains the stack policy. The URL must point to a template located in an HTTP or HTTPS web server or an Alibaba Cloud OSS bucket. Examples: oss://ros/template/demo and oss://ros/template/demo?RegionId=cn-hangzhou. The template can be up to 16,384 bytes in length, and the URL can be up to 1,350 bytes in length.
     *
     * You can specify one of the StackPolicyBody and StackPolicyURL parameters, but you cannot specify both of them.
     * @example oss://ros/stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyURL;
    protected $_name = [
        'regionId'        => 'RegionId',
        'stackId'         => 'StackId',
        'stackPolicyBody' => 'StackPolicyBody',
        'stackPolicyURL'  => 'StackPolicyURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetStackPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }

        return $model;
    }
}
