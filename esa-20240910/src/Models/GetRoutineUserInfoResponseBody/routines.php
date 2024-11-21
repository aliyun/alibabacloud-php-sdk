<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class routines extends Model
{
    /**
     * @description The time when the routine was created.
     *
     * @example 2024-03-11T01:23:02.883361712Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The routine description, which is Base64-encoded.
     *
     * @example ZWRpdCByb3V0aW5lIGNvbmZpZyBkZXNjcmlwdGlvbg
     *
     * @var string
     */
    public $description;

    /**
     * @description The routine name.
     *
     * @example test-routine1
     *
     * @var string
     */
    public $routineName;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'routineName' => 'RoutineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        return $model;
    }
}
