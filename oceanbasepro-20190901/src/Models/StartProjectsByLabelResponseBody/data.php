<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectsByLabelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failedProjectIds;

    /**
     * @var string[]
     */
    public $succeedProjectIds;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'failedProjectIds' => 'FailedProjectIds',
        'succeedProjectIds' => 'SucceedProjectIds',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->failedProjectIds)) {
            Model::validateArray($this->failedProjectIds);
        }
        if (\is_array($this->succeedProjectIds)) {
            Model::validateArray($this->succeedProjectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedProjectIds) {
            if (\is_array($this->failedProjectIds)) {
                $res['FailedProjectIds'] = [];
                $n1 = 0;
                foreach ($this->failedProjectIds as $item1) {
                    $res['FailedProjectIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->succeedProjectIds) {
            if (\is_array($this->succeedProjectIds)) {
                $res['SucceedProjectIds'] = [];
                $n1 = 0;
                foreach ($this->succeedProjectIds as $item1) {
                    $res['SucceedProjectIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['FailedProjectIds'])) {
            if (!empty($map['FailedProjectIds'])) {
                $model->failedProjectIds = [];
                $n1 = 0;
                foreach ($map['FailedProjectIds'] as $item1) {
                    $model->failedProjectIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SucceedProjectIds'])) {
            if (!empty($map['SucceedProjectIds'])) {
                $model->succeedProjectIds = [];
                $n1 = 0;
                foreach ($map['SucceedProjectIds'] as $item1) {
                    $model->succeedProjectIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
