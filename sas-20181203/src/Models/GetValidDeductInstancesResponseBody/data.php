<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetValidDeductInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetValidDeductInstancesResponseBody\data\deductPackageList;

class data extends Model
{
    /**
     * @var bool
     */
    public $canTry;

    /**
     * @var deductPackageList[]
     */
    public $deductPackageList;
    protected $_name = [
        'canTry' => 'CanTry',
        'deductPackageList' => 'DeductPackageList',
    ];

    public function validate()
    {
        if (\is_array($this->deductPackageList)) {
            Model::validateArray($this->deductPackageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }

        if (null !== $this->deductPackageList) {
            if (\is_array($this->deductPackageList)) {
                $res['DeductPackageList'] = [];
                $n1 = 0;
                foreach ($this->deductPackageList as $item1) {
                    $res['DeductPackageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }

        if (isset($map['DeductPackageList'])) {
            if (!empty($map['DeductPackageList'])) {
                $model->deductPackageList = [];
                $n1 = 0;
                foreach ($map['DeductPackageList'] as $item1) {
                    $model->deductPackageList[$n1] = deductPackageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
