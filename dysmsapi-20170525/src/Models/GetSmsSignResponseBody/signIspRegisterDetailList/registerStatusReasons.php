<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignResponseBody\signIspRegisterDetailList;

use AlibabaCloud\Dara\Model;

class registerStatusReasons extends Model
{
    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string[]
     */
    public $reasonDescList;
    protected $_name = [
        'reasonCode' => 'ReasonCode',
        'reasonDescList' => 'ReasonDescList',
    ];

    public function validate()
    {
        if (\is_array($this->reasonDescList)) {
            Model::validateArray($this->reasonDescList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonDescList) {
            if (\is_array($this->reasonDescList)) {
                $res['ReasonDescList'] = [];
                $n1 = 0;
                foreach ($this->reasonDescList as $item1) {
                    $res['ReasonDescList'][$n1] = $item1;
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
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonDescList'])) {
            if (!empty($map['ReasonDescList'])) {
                $model->reasonDescList = [];
                $n1 = 0;
                foreach ($map['ReasonDescList'] as $item1) {
                    $model->reasonDescList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
