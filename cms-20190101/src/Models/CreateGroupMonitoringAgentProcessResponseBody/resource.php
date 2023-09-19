<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessResponseBody;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The ID of the group process.
     *
     * @example 7F2B0024-4F21-48B9-A764-211CEC48****
     *
     * @var string
     */
    public $groupProcessId;
    protected $_name = [
        'groupProcessId' => 'GroupProcessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupProcessId) {
            $res['GroupProcessId'] = $this->groupProcessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupProcessId'])) {
            $model->groupProcessId = $map['GroupProcessId'];
        }

        return $model;
    }
}
