<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessTaskCountRequest extends Model
{
    /**
     * @description Collection of entity UUIDs.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $entityUuidList;

    /**
     * @description Language type for request and response messages. Values:
     *
     * - **zh** (default): Chinese.
     *
     * - **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description User ID for administrators to switch to other member\\"s perspective.
     *
     * @example 104739******259
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description View type.
     *
     * - **0**: Current Alibaba Cloud account view.
     * - **1**: View for all accounts under the enterprise.
     *
     * @example 0
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'entityUuidList' => 'EntityUuidList',
        'lang' => 'Lang',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
    ];

    public function validate() {}

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
