<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulCheckTaskStatusDetailRequest extends Model
{
    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var string[]
     */
    public $types;

    /**
     * @example 5d55af3c-35f3-4d4d-8ccc-8c5443b0****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'taskIds' => 'TaskIds',
        'types'   => 'Types',
        'uuid'    => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulCheckTaskStatusDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
