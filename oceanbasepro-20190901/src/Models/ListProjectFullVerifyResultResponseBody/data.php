<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody\data\fullVerifyTableStatistics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 11
     *
     * @var int
     */
    public $differentNumber;

    /**
     * @var fullVerifyTableStatistics[]
     */
    public $fullVerifyTableStatistics;
    protected $_name = [
        'differentNumber'           => 'DifferentNumber',
        'fullVerifyTableStatistics' => 'FullVerifyTableStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->differentNumber) {
            $res['DifferentNumber'] = $this->differentNumber;
        }
        if (null !== $this->fullVerifyTableStatistics) {
            $res['FullVerifyTableStatistics'] = [];
            if (null !== $this->fullVerifyTableStatistics && \is_array($this->fullVerifyTableStatistics)) {
                $n = 0;
                foreach ($this->fullVerifyTableStatistics as $item) {
                    $res['FullVerifyTableStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DifferentNumber'])) {
            $model->differentNumber = $map['DifferentNumber'];
        }
        if (isset($map['FullVerifyTableStatistics'])) {
            if (!empty($map['FullVerifyTableStatistics'])) {
                $model->fullVerifyTableStatistics = [];
                $n                                = 0;
                foreach ($map['FullVerifyTableStatistics'] as $item) {
                    $model->fullVerifyTableStatistics[$n++] = null !== $item ? fullVerifyTableStatistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
