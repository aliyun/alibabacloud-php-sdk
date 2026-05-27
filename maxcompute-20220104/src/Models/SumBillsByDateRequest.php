<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class SumBillsByDateRequest extends Model
{
    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string[]
     */
    public $projectNames;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $statsType;

    /**
     * @var int
     */
    public $topN;
    protected $_name = [
        'endDate' => 'endDate',
        'projectNames' => 'projectNames',
        'startDate' => 'startDate',
        'statsType' => 'statsType',
        'topN' => 'topN',
    ];

    public function validate()
    {
        if (\is_array($this->projectNames)) {
            Model::validateArray($this->projectNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->projectNames) {
            if (\is_array($this->projectNames)) {
                $res['projectNames'] = [];
                $n1 = 0;
                foreach ($this->projectNames as $item1) {
                    $res['projectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->statsType) {
            $res['statsType'] = $this->statsType;
        }

        if (null !== $this->topN) {
            $res['topN'] = $this->topN;
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
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['projectNames'])) {
            if (!empty($map['projectNames'])) {
                $model->projectNames = [];
                $n1 = 0;
                foreach ($map['projectNames'] as $item1) {
                    $model->projectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['statsType'])) {
            $model->statsType = $map['statsType'];
        }

        if (isset($map['topN'])) {
            $model->topN = $map['topN'];
        }

        return $model;
    }
}
