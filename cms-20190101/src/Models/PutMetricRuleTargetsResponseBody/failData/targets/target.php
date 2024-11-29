<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponseBody\failData\targets;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The ARN of the resource. Format: `acs:{Service name abbreviation}:{regionId}:{userId}:/{Resource type}/{Resource name}/message`. SMQ, Auto Scaling, Simple Log Service, and Function Compute are supported. Example: `acs:mns:cn-hangzhou:120886317861****:/queues/test123/message`. The following part describes the ARN of SMQ and the parameters in the ARN:
     *
     *   {Service name abbreviation}: mns.
     *
     *   {userId}: the ID of the Alibaba Cloud account.
     *
     *   {regionId}: the region ID of the SMQ queue or topic.
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
     * @example acs:mns:cn-hangzhou:111:/queues/test/message
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the resource for which alerts are triggered.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

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
        'arn'   => 'Arn',
        'id'    => 'Id',
        'level' => 'Level',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
