<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics\dataBaseStatistics;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics\sourceStatistics;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics\userStatistics;
use AlibabaCloud\Tea\Model;

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
        'sourceStatistics'   => 'SourceStatistics',
        'userStatistics'     => 'UserStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataBaseStatistics) {
            $res['DataBaseStatistics'] = [];
            if (null !== $this->dataBaseStatistics && \is_array($this->dataBaseStatistics)) {
                $n = 0;
                foreach ($this->dataBaseStatistics as $item) {
                    $res['DataBaseStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceStatistics) {
            $res['SourceStatistics'] = [];
            if (null !== $this->sourceStatistics && \is_array($this->sourceStatistics)) {
                $n = 0;
                foreach ($this->sourceStatistics as $item) {
                    $res['SourceStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userStatistics) {
            $res['UserStatistics'] = [];
            if (null !== $this->userStatistics && \is_array($this->userStatistics)) {
                $n = 0;
                foreach ($this->userStatistics as $item) {
                    $res['UserStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataBaseStatistics'])) {
            if (!empty($map['DataBaseStatistics'])) {
                $model->dataBaseStatistics = [];
                $n                         = 0;
                foreach ($map['DataBaseStatistics'] as $item) {
                    $model->dataBaseStatistics[$n++] = null !== $item ? dataBaseStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceStatistics'])) {
            if (!empty($map['SourceStatistics'])) {
                $model->sourceStatistics = [];
                $n                       = 0;
                foreach ($map['SourceStatistics'] as $item) {
                    $model->sourceStatistics[$n++] = null !== $item ? sourceStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserStatistics'])) {
            if (!empty($map['UserStatistics'])) {
                $model->userStatistics = [];
                $n                     = 0;
                foreach ($map['UserStatistics'] as $item) {
                    $model->userStatistics[$n++] = null !== $item ? userStatistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
