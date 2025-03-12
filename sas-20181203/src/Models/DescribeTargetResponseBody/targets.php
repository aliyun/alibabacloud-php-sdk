<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTargetResponseBody;

use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The flag that is added to the server. This parameter can be empty.
     *
     * @example del
     *
     * @var string
     */
    public $flag;

    /**
     * @description The UUID of the server or the ID of the server group.
     *
     * @example 5c5f0169-3527-40a2-b5ff-0bc1db8f****
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the object. Valid values:
     *
     *   **uuid**: a server
     *   **groupId**: a server group
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'flag'       => 'Flag',
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
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
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
