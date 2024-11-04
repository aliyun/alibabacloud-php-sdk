<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessTaskCountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $entityUuidList;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 104739******259
     *
     * @var int
     */
    public $roleFor;

    /**
     * @example 0
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'entityUuidList' => 'EntityUuidList',
        'lang'           => 'Lang',
        'roleFor'        => 'RoleFor',
        'roleType'       => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityUuidList) {
            $res['EntityUuidList'] = $this->entityUuidList;
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

    /**
     * @param array $map
     *
     * @return DescribeProcessTaskCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityUuidList'])) {
            if (!empty($map['EntityUuidList'])) {
                $model->entityUuidList = $map['EntityUuidList'];
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
