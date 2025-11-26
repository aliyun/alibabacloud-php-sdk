<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody;

use AlibabaCloud\Dara\Model;

class labels extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $valueList;
    protected $_name = [
        'name' => 'Name',
        'valueList' => 'ValueList',
    ];

    public function validate()
    {
        if (\is_array($this->valueList)) {
            Model::validateArray($this->valueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->valueList) {
            if (\is_array($this->valueList)) {
                $res['ValueList'] = [];
                $n1 = 0;
                foreach ($this->valueList as $item1) {
                    $res['ValueList'][$n1] = $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ValueList'])) {
            if (!empty($map['ValueList'])) {
                $model->valueList = [];
                $n1 = 0;
                foreach ($map['ValueList'] as $item1) {
                    $model->valueList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
