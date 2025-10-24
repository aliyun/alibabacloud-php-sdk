<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetStorageSummaryComparedShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $projectsShrink;

    /**
     * @var string
     */
    public $region;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
