<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateResponseBody\template;
use AlibabaCloud\Tea\Model;

class GetExecutionTemplateResponseBody extends Model
{
    /**
     * @description The content of the template.
     *
     * @example "{\n \"FormatVersion\": \"OOS-2019-06-01\",\n \"Parameters\": {\n \"Status\": {\n \"Type\": \"String\",\n \"Description\": \"(Required) The ID of the ECS instance.\"\n }\n },\n \"Tasks\": [\n {\n \"Name\": \"bar\",\n \"Properties\": {\n \"Parameters\": {\n \"Status\": \"{{ Status }}\"\n },\n \"API\": \"DescribeInstances\",\n \"Service\": \"Ecs\"\n },\n \"Action\": \"acs::ExecuteAPI\",\n \"Outputs\": {\n \"InstanceIds\", {\n \"ValueSelector\": \".Instances.Instance[].InstanceId\",\n \"Type\": \"List\"\n }\n }\n }\n ],\n \"Outputs\": {\n \"InstanceIds\": {\n \"Value\": \" {{ bar.InstanceIds }} \",\n \"Type\": \"List\"\n }\n }\n}\n"
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the request.
     *
     * @example 14A60-EBE7-47CA-9757-12C1D47A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metadata of the template.
     *
     * @var template
     */
    public $template;
    protected $_name = [
        'content'   => 'Content',
        'requestId' => 'RequestId',
        'template'  => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExecutionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }

        return $model;
    }
}
