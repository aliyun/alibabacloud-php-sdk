<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetSQLReviewOptimizeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'regionId'          => 'RegionId',
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'tid'               => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSQLReviewOptimizeDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
