<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetStorageSummaryComparedShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 20250601
     *
     * @var string
     */
    public $beginDate;

    /**
     * @description This parameter is required.
     *
     * @example 20250604
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $projectsShrink;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example 483212237127906
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'beginDate' => 'beginDate',
        'endDate' => 'endDate',
        'projectsShrink' => 'projects',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['beginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->projectsShrink) {
            $res['projects'] = $this->projectsShrink;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStorageSummaryComparedShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['beginDate'])) {
            $model->beginDate = $map['beginDate'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['projects'])) {
            $model->projectsShrink = $map['projects'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
