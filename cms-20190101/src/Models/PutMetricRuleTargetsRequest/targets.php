<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the resource. Message Service (MNS), Auto Scaling, Simple Log Service, and Function Compute are supported.
     *
     * `acs:mns:{regionId}:{userId}:/{Resource type}/{Resource name}/message`.
     *
     *   {regionId}: the region ID of the message queue or topic.
     *
     *   {userId}: the ID of the Alibaba Cloud account that owns the resource.
     *
     *   {Resource type}: the type of the resource for which alerts are triggered. Valid values:
     *
     *   **queues**
     *   **topics**
     *
     *   {Resource name}: the resource name.
     *
     *   If the resource type is **queues**, the resource name is the queue name.
     *   If the resource type is **topics**, the resource name is the topic name.
     *
     * This parameter is required.
     * @example acs:mns:cn-hangzhou:120886317861****:/queues/test/message
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the resource for which alerts are triggered.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The JSON-formatted parameters of the alert callback.
     *
     * @example {"customField1":"value1","customField2":"$.name"}
     *
     * @var string
     */
    public $jsonParams;

    /**
     * @description The alert level. Valid values:
     *
     *   INFO
     *   WARN
     *   CRITICAL
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
     * @return targets
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
