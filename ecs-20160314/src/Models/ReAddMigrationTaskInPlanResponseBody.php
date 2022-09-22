<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ReAddMigrationTaskInPlanResponseBody\failModels;
use AlibabaCloud\Tea\Model;

class ReAddMigrationTaskInPlanResponseBody extends Model
{
    /**
     * @var failModels
     */
    public $failModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failModels' => 'FailModels',
        'requestId'  => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReAddMigrationTaskInPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailModels'])) {
            $model->failModels = failModels::fromMap($map['FailModels']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
