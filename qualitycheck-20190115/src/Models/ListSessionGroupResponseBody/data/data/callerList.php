<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class callerList extends Model
{
    /**
     * @var string[]
     */
    public $callerList;
    protected $_name = [
        'callerList' => 'CallerList',
    ];

    public function validate()
    {
        if (\is_array($this->callerList)) {
            Model::validateArray($this->callerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerList) {
            if (\is_array($this->callerList)) {
                $res['CallerList'] = [];
                $n1                = 0;
                foreach ($this->callerList as $item1) {
                    $res['CallerList'][$n1++] = $item1;
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
        if (isset($map['CallerList'])) {
            if (!empty($map['CallerList'])) {
                $model->callerList = [];
                $n1                = 0;
                foreach ($map['CallerList'] as $item1) {
                    $model->callerList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
