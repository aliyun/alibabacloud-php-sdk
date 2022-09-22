<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\sgFailModels;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\sgFailModels\sgFailModel\failModels;
use AlibabaCloud\Tea\Model;

class sgFailModel extends Model
{
    /**
     * @var failModels
     */
    public $failModels;

    /**
     * @var string
     */
    public $groupNo;
    protected $_name = [
        'failModels' => 'FailModels',
        'groupNo'    => 'GroupNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failModels) {
            $res['FailModels'] = null !== $this->failModels ? $this->failModels->toMap() : null;
        }
        if (null !== $this->groupNo) {
            $res['GroupNo'] = $this->groupNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sgFailModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailModels'])) {
            $model->failModels = failModels::fromMap($map['FailModels']);
        }
        if (isset($map['GroupNo'])) {
            $model->groupNo = $map['GroupNo'];
        }

        return $model;
    }
}
