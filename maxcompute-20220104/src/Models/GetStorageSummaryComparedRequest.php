<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetStorageSummaryComparedRequest extends Model
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
     * @var string[]
     */
    public $projects;

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
        'projects' => 'projects',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
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

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['projects'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['projects'] as $item1) {
                    $model->projects[$n1] = $item1;
                    ++$n1;
                }
            }
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
