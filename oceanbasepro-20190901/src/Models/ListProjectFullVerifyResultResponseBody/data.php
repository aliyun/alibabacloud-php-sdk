<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody\data\fullVerifyTableStatistics;

class data extends Model
{
    /**
     * @var int
     */
    public $differentNumber;

    /**
     * @var fullVerifyTableStatistics[]
     */
    public $fullVerifyTableStatistics;
    protected $_name = [
        'differentNumber' => 'DifferentNumber',
        'fullVerifyTableStatistics' => 'FullVerifyTableStatistics',
    ];

    public function validate()
    {
        if (\is_array($this->fullVerifyTableStatistics)) {
            Model::validateArray($this->fullVerifyTableStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->differentNumber) {
            $res['DifferentNumber'] = $this->differentNumber;
        }

        if (null !== $this->fullVerifyTableStatistics) {
            if (\is_array($this->fullVerifyTableStatistics)) {
                $res['FullVerifyTableStatistics'] = [];
                $n1 = 0;
                foreach ($this->fullVerifyTableStatistics as $item1) {
                    $res['FullVerifyTableStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DifferentNumber'])) {
            $model->differentNumber = $map['DifferentNumber'];
        }

        if (isset($map['FullVerifyTableStatistics'])) {
            if (!empty($map['FullVerifyTableStatistics'])) {
                $model->fullVerifyTableStatistics = [];
                $n1 = 0;
                foreach ($map['FullVerifyTableStatistics'] as $item1) {
                    $model->fullVerifyTableStatistics[$n1] = fullVerifyTableStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
