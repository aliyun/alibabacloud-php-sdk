<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeProcessStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $processActionEnd;

    /**
     * @var int
     */
    public $processActionStart;

    /**
     * @var string
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'lang' => 'Lang',
        'processActionEnd' => 'ProcessActionEnd',
        'processActionStart' => 'ProcessActionStart',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->processActionEnd) {
            $res['ProcessActionEnd'] = $this->processActionEnd;
        }

        if (null !== $this->processActionStart) {
            $res['ProcessActionStart'] = $this->processActionStart;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProcessActionEnd'])) {
            $model->processActionEnd = $map['ProcessActionEnd'];
        }

        if (isset($map['ProcessActionStart'])) {
            $model->processActionStart = $map['ProcessActionStart'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
