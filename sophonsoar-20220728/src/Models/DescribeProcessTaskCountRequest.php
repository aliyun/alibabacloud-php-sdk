<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeProcessTaskCountRequest extends Model
{
    /**
     * @var string[]
     */
    public $entityUuidList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'entityUuidList' => 'EntityUuidList',
        'lang' => 'Lang',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        if (\is_array($this->entityUuidList)) {
            Model::validateArray($this->entityUuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityUuidList) {
            if (\is_array($this->entityUuidList)) {
                $res['EntityUuidList'] = [];
                $n1 = 0;
                foreach ($this->entityUuidList as $item1) {
                    $res['EntityUuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['EntityUuidList'])) {
            if (!empty($map['EntityUuidList'])) {
                $model->entityUuidList = [];
                $n1 = 0;
                foreach ($map['EntityUuidList'] as $item1) {
                    $model->entityUuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
