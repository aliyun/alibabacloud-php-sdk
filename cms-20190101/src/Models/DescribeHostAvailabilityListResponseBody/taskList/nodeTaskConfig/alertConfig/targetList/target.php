<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\targetList;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the function.
     *
     * Format: `arn:acs:${Service}:${Region}:${Account}:${ResourceType}/${ResourceId}`. Fields:
     *
     *   Service: the service code
     *   Region: the region ID
     *   Account: the ID of the Alibaba Cloud account
     *   ResourceType: the resource type
     *   ResourceId: the resource ID.
     *
     * @example acs:mns:cn-hangzhou:17754132319*****:/queues/test/messages
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the resource that triggers the alert.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The JSON-formatted parameters of the alert callback.
     *
     * @example {"key1":"value1"}
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
     * @example INFO
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
        if (isset($map['JsonParams'])) {
            $model->jsonParams = $map['JsonParams'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
