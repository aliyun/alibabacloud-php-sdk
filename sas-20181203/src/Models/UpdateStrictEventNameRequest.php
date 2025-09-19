<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateStrictEventNameRequest extends Model
{
    /**
     * @var string[]
     */
    public $eventNameList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'eventNameList' => 'EventNameList',
        'lang' => 'Lang',
        'operator' => 'Operator',
    ];

    public function validate()
    {
        if (\is_array($this->eventNameList)) {
            Model::validateArray($this->eventNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventNameList) {
            if (\is_array($this->eventNameList)) {
                $res['EventNameList'] = [];
                $n1 = 0;
                foreach ($this->eventNameList as $item1) {
                    $res['EventNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
        if (isset($map['EventNameList'])) {
            if (!empty($map['EventNameList'])) {
                $model->eventNameList = [];
                $n1 = 0;
                foreach ($map['EventNameList'] as $item1) {
                    $model->eventNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
