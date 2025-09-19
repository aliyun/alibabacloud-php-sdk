<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetAccountLabelRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelList;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'labelList' => 'LabelList',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        if (\is_array($this->labelList)) {
            Model::validateArray($this->labelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelList) {
            if (\is_array($this->labelList)) {
                $res['LabelList'] = [];
                $n1 = 0;
                foreach ($this->labelList as $item1) {
                    $res['LabelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = [];
                $n1 = 0;
                foreach ($map['LabelList'] as $item1) {
                    $model->labelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
