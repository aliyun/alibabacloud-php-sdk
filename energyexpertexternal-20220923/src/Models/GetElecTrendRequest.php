<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetElecTrendRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int[]
     */
    public $yearList;
    protected $_name = [
        'code' => 'code',
        'yearList' => 'yearList',
    ];

    public function validate()
    {
        if (\is_array($this->yearList)) {
            Model::validateArray($this->yearList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->yearList) {
            if (\is_array($this->yearList)) {
                $res['yearList'] = [];
                $n1 = 0;
                foreach ($this->yearList as $item1) {
                    $res['yearList'][$n1++] = $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['yearList'])) {
            if (!empty($map['yearList'])) {
                $model->yearList = [];
                $n1 = 0;
                foreach ($map['yearList'] as $item1) {
                    $model->yearList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
