<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeQuotaPlanResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeQuotaPlanResponseBody\data\planList\quota;
use AlibabaCloud\Tea\Model;

class planList extends Model
{
    /**
     * @description The time when the quota plan was created.
     *
     * @example 1731394621890
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the quota plan.
     *
     * @example planA
     *
     * @var string
     */
    public $name;

    /**
     * @description The details of the quota.
     *
     * @var quota
     */
    public $quota;
    protected $_name = [
        'createTime' => 'createTime',
        'name' => 'name',
        'quota' => 'quota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }

        return $model;
    }
}
