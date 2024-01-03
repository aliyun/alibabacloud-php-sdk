<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class TaskAssginConfig extends Model
{
    /**
     * @var int
     */
    public $assignCount;

    /**
     * @var string
     */
    public $assignField;

    /**
     * @var string
     */
    public $assignSubTaskCount;

    /**
     * @var string
     */
    public $assignType;
    protected $_name = [
        'assignCount'        => 'AssignCount',
        'assignField'        => 'AssignField',
        'assignSubTaskCount' => 'AssignSubTaskCount',
        'assignType'         => 'AssignType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignCount) {
            $res['AssignCount'] = $this->assignCount;
        }
        if (null !== $this->assignField) {
            $res['AssignField'] = $this->assignField;
        }
        if (null !== $this->assignSubTaskCount) {
            $res['AssignSubTaskCount'] = $this->assignSubTaskCount;
        }
        if (null !== $this->assignType) {
            $res['AssignType'] = $this->assignType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskAssginConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignCount'])) {
            $model->assignCount = $map['AssignCount'];
        }
        if (isset($map['AssignField'])) {
            $model->assignField = $map['AssignField'];
        }
        if (isset($map['AssignSubTaskCount'])) {
            $model->assignSubTaskCount = $map['AssignSubTaskCount'];
        }
        if (isset($map['AssignType'])) {
            $model->assignType = $map['AssignType'];
        }

        return $model;
    }
}
