<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest\alertConfig;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the resource.
     *
     * For information about how to obtain the ARN of a resource, see [DescribeMetricRuleTargets](https://help.aliyun.com/document_detail/121592.html).
     *
     * Format: `acs:{Service name abbreviation}:{regionId}:{userId}:/{Resource type}/{Resource name}/message`. Example: `acs:mns:cn-hangzhou:120886317861****:/queues/test123/message`. Fields:
     *
     * - {Resource type}: the type of the resource for which alerts are triggered. Valid values:
     * - **queues**
     * - **topics**
     * - {Resourcename}: the name of the resource.
     * - If the resource type is set to **queues**, the resource name is the name of the message queue.
     * - If the resource type is set to **topics**, the resource name is the name of the topic.`
     * @example acs:mns:cn-hangzhou:120886317861****:/queues/test/message
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the resource for which alerts are triggered.
     *
     * For information about how to obtain the ID of a resource for which alerts are triggered, see [DescribeMetricRuleTargets](https://help.aliyun.com/document_detail/121592.html).
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The parameters of the alert callback. The parameters are in the JSON format.
     *
     * @example {"customField1":"value1","customField2":"$.name"}
     *
     * @var string
     */
    public $jsonParams;

    /**
     * @description The level of the alert. Valid values:
     *
     *   INFO: information
     *   WARN: warning
     *   CRITICAL: critical
     *
     * @example ["INFO", "WARN", "CRITICAL"]
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'arn'        => 'Arn',
        'id'         => 'Id',
        'jsonParams' => 'JsonParams',
        'level'      => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jsonParams) {
            $res['JsonParams'] = $this->jsonParams;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JsonParams'])) {
            $model->jsonParams = $map['JsonParams'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
