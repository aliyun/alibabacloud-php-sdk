<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetSQLReviewOptimizeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
