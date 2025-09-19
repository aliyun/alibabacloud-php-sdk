<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetClientRatioStatisticRequest extends Model
{
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var string[]
     */
    public $statisticTypes;

    /**
     * @var int
     */
    public $timeEnd;

    /**
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'statisticTypes' => 'StatisticTypes',
        'timeEnd' => 'TimeEnd',
        'timeStart' => 'TimeStart',
    ];

    public function validate()
    {
        if (\is_array($this->statisticTypes)) {
            Model::validateArray($this->statisticTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->statisticTypes) {
            if (\is_array($this->statisticTypes)) {
                $res['StatisticTypes'] = [];
                $n1 = 0;
                foreach ($this->statisticTypes as $item1) {
                    $res['StatisticTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }

        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
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
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['StatisticTypes'])) {
            if (!empty($map['StatisticTypes'])) {
                $model->statisticTypes = [];
                $n1 = 0;
                foreach ($map['StatisticTypes'] as $item1) {
                    $model->statisticTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }

        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}
