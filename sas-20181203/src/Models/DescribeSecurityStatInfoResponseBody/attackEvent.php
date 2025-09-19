<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody;

use AlibabaCloud\Dara\Model;

class attackEvent extends Model
{
    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $valueArray;
    protected $_name = [
        'dateArray' => 'DateArray',
        'totalCount' => 'TotalCount',
        'valueArray' => 'ValueArray',
    ];

    public function validate()
    {
        if (\is_array($this->dateArray)) {
            Model::validateArray($this->dateArray);
        }
        if (\is_array($this->valueArray)) {
            Model::validateArray($this->valueArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateArray) {
            if (\is_array($this->dateArray)) {
                $res['DateArray'] = [];
                $n1 = 0;
                foreach ($this->dateArray as $item1) {
                    $res['DateArray'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->valueArray) {
            if (\is_array($this->valueArray)) {
                $res['ValueArray'] = [];
                $n1 = 0;
                foreach ($this->valueArray as $item1) {
                    $res['ValueArray'][$n1] = $item1;
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
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = [];
                $n1 = 0;
                foreach ($map['DateArray'] as $item1) {
                    $model->dateArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['ValueArray'])) {
            if (!empty($map['ValueArray'])) {
                $model->valueArray = [];
                $n1 = 0;
                foreach ($map['ValueArray'] as $item1) {
                    $model->valueArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
