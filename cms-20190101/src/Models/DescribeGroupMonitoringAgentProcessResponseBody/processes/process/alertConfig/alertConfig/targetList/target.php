<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\alertConfig\alertConfig\targetList;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the resource. Format: acs:{Service name abbreviation}:{regionId}:{userId}:/{Resource type}/{Resource name}/message. Example: acs:mns:cn-hangzhou:120886317861\\*\\*\\*\\*:/queues/test123/message. Fields:
     *
     *   {Service name abbreviation}: the abbreviation of the service name. Set the value to Simple Message Queue (formerly MNS) (SMQ).
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
     * @example acs:mns:cn-hangzhou:120886317861****:/queues/test/message
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the resource for which alerts are triggered.
     *
     * @example 123
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
    public $jsonParmas;

    /**
     * @description The alert level. Valid values:
     *
     *   INFO
     *   WARN
     *   CRITICAL
     *
     * @example CRITICAL
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'arn'        => 'Arn',
        'id'         => 'Id',
        'jsonParmas' => 'JsonParmas',
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
        if (null !== $this->jsonParmas) {
            $res['JsonParmas'] = $this->jsonParmas;
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
        if (isset($map['JsonParmas'])) {
            $model->jsonParmas = $map['JsonParmas'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
