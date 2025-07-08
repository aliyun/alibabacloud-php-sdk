<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailNewResponseBody;

use AlibabaCloud\Dara\Model;

class phoneList extends Model
{
    /**
     * @var string[]
     */
    public $phoneNum;
    protected $_name = [
        'phoneNum' => 'phoneNum',
    ];

    public function validate()
    {
        if (\is_array($this->phoneNum)) {
            Model::validateArray($this->phoneNum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phoneNum) {
            if (\is_array($this->phoneNum)) {
                $res['phoneNum'] = [];
                $n1 = 0;
                foreach ($this->phoneNum as $item1) {
                    $res['phoneNum'][$n1] = $item1;
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
        if (isset($map['phoneNum'])) {
            if (!empty($map['phoneNum'])) {
                $model->phoneNum = [];
                $n1 = 0;
                foreach ($map['phoneNum'] as $item1) {
                    $model->phoneNum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
