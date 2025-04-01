<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics\dataBaseStatistics;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics\sourceStatistics;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics\userStatistics;

class sessionStatistics extends Model
{
    /**
     * @var dataBaseStatistics[]
     */
    public $dataBaseStatistics;

    /**
     * @var sourceStatistics[]
     */
    public $sourceStatistics;

    /**
     * @var userStatistics[]
     */
    public $userStatistics;
    protected $_name = [
        'dataBaseStatistics' => 'DataBaseStatistics',
        'sourceStatistics' => 'SourceStatistics',
        'userStatistics' => 'UserStatistics',
    ];

    public function validate()
    {
        if (\is_array($this->dataBaseStatistics)) {
            Model::validateArray($this->dataBaseStatistics);
        }
        if (\is_array($this->sourceStatistics)) {
            Model::validateArray($this->sourceStatistics);
        }
        if (\is_array($this->userStatistics)) {
            Model::validateArray($this->userStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataBaseStatistics) {
            if (\is_array($this->dataBaseStatistics)) {
                $res['DataBaseStatistics'] = [];
                $n1 = 0;
                foreach ($this->dataBaseStatistics as $item1) {
                    $res['DataBaseStatistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sourceStatistics) {
            if (\is_array($this->sourceStatistics)) {
                $res['SourceStatistics'] = [];
                $n1 = 0;
                foreach ($this->sourceStatistics as $item1) {
                    $res['SourceStatistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userStatistics) {
            if (\is_array($this->userStatistics)) {
                $res['UserStatistics'] = [];
                $n1 = 0;
                foreach ($this->userStatistics as $item1) {
                    $res['UserStatistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DataBaseStatistics'])) {
            if (!empty($map['DataBaseStatistics'])) {
                $model->dataBaseStatistics = [];
                $n1 = 0;
                foreach ($map['DataBaseStatistics'] as $item1) {
                    $model->dataBaseStatistics[$n1++] = dataBaseStatistics::fromMap($item1);
                }
            }
        }

        if (isset($map['SourceStatistics'])) {
            if (!empty($map['SourceStatistics'])) {
                $model->sourceStatistics = [];
                $n1 = 0;
                foreach ($map['SourceStatistics'] as $item1) {
                    $model->sourceStatistics[$n1++] = sourceStatistics::fromMap($item1);
                }
            }
        }

        if (isset($map['UserStatistics'])) {
            if (!empty($map['UserStatistics'])) {
                $model->userStatistics = [];
                $n1 = 0;
                foreach ($map['UserStatistics'] as $item1) {
                    $model->userStatistics[$n1++] = userStatistics::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
