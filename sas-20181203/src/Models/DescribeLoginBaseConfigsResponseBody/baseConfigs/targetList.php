<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody\baseConfigs;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @description The UUID or group ID of the server.
     *
     * @example 0011ea53-738c-4bff-93be-ce6a1cc9****
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the server to which the configuration is applied. Valid values:
     *
     *   **uuid**: a server
     *   **groupId**: a server group
     *   **global**: all servers
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
