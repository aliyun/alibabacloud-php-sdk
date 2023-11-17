<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerSophonPlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example a7c6d055-a72f-4676-bc89-3cd9edc0284c
     *
     * @var string
     */
    public $sophonTaskId;
    protected $_name = [
        'sophonTaskId' => 'SophonTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sophonTaskId) {
            $res['SophonTaskId'] = $this->sophonTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }

        return $model;
    }
}
