<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateStackTemplateByResourcesResponseBody extends Model
{
    /**
     * @example {\"ROSTemplateFormatVersion\": \"2015-09-01\", \"Resources\": {\"Vpc\": {\"Type\": \"ALIYUN::ECS::VPC\", \"Properties\": {\"VpcName\": \"test\", \"CidrBlock\": \"192.168.0.0/16\", \"Description\": \"test2\"}}}, \"Outputs\": {\"VpcId\": {\"Value\": {\"Fn::GetAtt\": [\"Vpc\", \"VpcId\"]}}}}
     *
     * @var string
     */
    public $newTemplateBody;

    /**
     * @example {\"ROSTemplateFormatVersion\": \"2015-09-01\", \"Resources\": {\"Vpc\": {\"Type\": \"ALIYUN::ECS::VPC\", \"Properties\": {\"VpcName\": \"test\", \"CidrBlock\": \"192.168.0.0/16\", \"Description\": \"test1\"}}}, \"Outputs\": {\"VpcId\": {\"Value\": {\"Fn::GetAtt\": [\"Vpc\", \"VpcId\"]}}}}
     *
     * @var string
     */
    public $oldTemplateBody;

    /**
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'newTemplateBody' => 'NewTemplateBody',
        'oldTemplateBody' => 'OldTemplateBody',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newTemplateBody) {
            $res['NewTemplateBody'] = $this->newTemplateBody;
        }
        if (null !== $this->oldTemplateBody) {
            $res['OldTemplateBody'] = $this->oldTemplateBody;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackTemplateByResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewTemplateBody'])) {
            $model->newTemplateBody = $map['NewTemplateBody'];
        }
        if (isset($map['OldTemplateBody'])) {
            $model->oldTemplateBody = $map['OldTemplateBody'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
