<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class SumStorageMetricsByDateRequest extends Model
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
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $statsType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'endDate' => 'endDate',
        'projectNames' => 'projectNames',
        'region' => 'region',
        'startDate' => 'startDate',
        'statsType' => 'statsType',
        'userId' => 'userId',
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

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->statsType) {
            $res['statsType'] = $this->statsType;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['statsType'])) {
            $model->statsType = $map['statsType'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
